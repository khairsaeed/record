<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <title>{{ config('app.name', 'Laravel') }}</title>
 <!-- Fonts -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

 <!-- Styles -->
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">



 <!-- Scripts -->
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

 <link 
 rel="stylesheet"
 href="{{ asset('css/bootstrap.min.css') }}">

<!-- Latest compiled and minified JavaScript -->
<script
 src="{{ asset('js/bootstrap.min.js') }}"></script>
   
    
    </head>
    <style>
        p.right {
            padding-top: 5px;
            text-align: right;
            color: red;
            font-size: larger;
            padding-bottom: 3px;
        }
        </style>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
           

            <!-- Page Heading -->
            <header class="bg-white shadow" dir="rtl">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"   >
               <div class="row">    <p class="right" ><i class="fas fa-align-right    ">
                         <a href="/main" >قائمة الموظفين</a>
                        </i></p> 
                       
                       

                     {{-- @auth('admin')
                     <p class="right" ><i class="fas fa-align-left    " style="padding-right: 50%">
                        <a href="{{ Route('user-create') }}" > اضافة مستخدم</a>
                       </i></p> 
                     @endauth --}}

                  </div> 
                </div>
            </header>

            <!-- Page Content -->
            <main dir="rtl">
               <div class="col-12">
               <!--  <div class="d-flex flex-row-reverse bd-highlight"> -->
               
                 
                    @yield('content')
               </div>
               
            </main>
        </div>

       

        
    </body>
        
</html>
