@extends('layouts.emp.emp')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align:center;background-color:#a6a6a6;"><h4><b>فرز سجلات الموظفين</b></h4></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('infoController.adindex') }}">
                            @csrf
                                <div class="form-group mt-2">
                                <div class="mt-2" style="text-align:right;"><b>الجهة العامة :</b></div>
                                    <select name="main" id="main" class="form-control">
                                    <option value="" selected> --- اختر الجهة العامة --- </option>
                                    @foreach($main as $mn)
                                    <option value="{{ $mn->MainName}}">{{ $mn->MainName }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group d-none mt-2" id="subdiv">
                                <div class="mt-2" style="text-align:right;"><b>الجهة الفرعية :</b></div>
                                    <select name="sub" id="sub" class="form-control">
                                    <option value="" selected> --- اختر الجهة الفرعية --- </option>
                                    </select>
                                </div>
                                <div class="form-group d-none mt-2" id="degdiv">
                                <div class="mt-2" style="text-align:right;"><b>الفئة :</b></div>
                                    <select name="degree" id="degree" class="form-control">
                                    <option value="" selected> --- اختر الجهة الفئة --- </option>
                                    </select>
                                </div>
                                <div class="form-group d-none" id="bttn">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                       فــــــــرز
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#main').change(function(){
        var $subdev = $('#sub');
        var token = "{{ csrf_token() }}";
        $.ajax({
                type: "POST",
                url: "{{ route('Dynamicdropdown.getsub') }}",
                data: {
                    _token:token,
                    main:$(this).val()
                    },
                success: function (data) {
                        $subdev.html('<option value="" selected> --- اختر الجهة الفرعية --- </option>');
                        $.each(data, function (id, value) {
                            $subdev.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
                $('#sub, #degree').val("");
                $('#subdiv').removeClass('d-none');
            });
            $('#sub').change(function () {
                var $deg = $('#degree');
                var token = "{{ csrf_token() }}";
                $.ajax({
                    type: "POST",
                    url: "{{ route('Dynamicdropdown.getdegree') }}",
                    data: {
                        _token:token,
                        sub: $(this).val()
                    },
                    success: function (data) {
                        $deg.html('<option value="" selected> --- اختر الفئة --- </option>');
                        $.each(data, function (id, value) {
                            $deg.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
                $('#degdiv').removeClass('d-none');
                $('#bttn').removeClass('d-none');
            });
        });

</script>
@endsection('content')