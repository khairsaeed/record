
            @csrf
            <div id="user_field"  class="row col-sm-12 ">
            <div class="row">
             <div class="col-sm-2">   الاسم </div>
               <div class="col-sm-3"> <input type="text" id="name" class="form-control" type="text" name="name" :value="{{ $user->name }}" required autofocus autocomplete="name" />
            </div></div>

            <div class="row">
                <div class="col-sm-2">   الايميل </div>
                <div class="col-sm-3"> <input type="text" id="email" class="form-control" type="email" name="email" :value="{{ $user->email }}" required />
            </div>

            <div class="row">
                <div class="col-sm-2">   كلمة السر </div>
                <div class="col-sm-3">  <input type="password"  id="password" class="form-control" type="password" name="password" value="{{ $user->password }}" required autocomplete="new-password" />
            </div>

            <div class="row">
                <div class="col-sm-2">   تأكيد كلمة السر </div>
                <div class="col-sm-3"> <input type="password" id="password_confirmation" class="form-control" type="password" value="{{ $user->password }}" name="password_confirmation" required autocomplete="new-password" />
            </div>
            </div>