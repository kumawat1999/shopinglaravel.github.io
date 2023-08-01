<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Login...</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{asset('backend/images/fevicon.png')}}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{asset('backend/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('backend/css/responsive.css"')}} />
      <!-- color css -->
      <link rel="stylesheet" href="{{asset('backend/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('backend/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('backend/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="{{asset('backend/js/semantic.min.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{asset('backend/images/logo/logo.png')}}" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form method="post">
                        @csrf
                        <fieldset>
                           <div class="field">
                               <label class="label_field">User Name</label>
                               <input type="text" name="name" value="{{old('name')}}" placeholder="Name" />
                               @error('name')
                                   <div class="errormessage">{{$message}}</div>
                               @enderror
                            </div>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="email" value="{{old('email')}}" placeholder="E-mail" />
                              @error('email')
                                  <div class="errormessage">{{$message}}</div>
                              @enderror
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" value="{{old('password')}}" placeholder="Password" />
                              @error('password')
                                  <div class="errormessage">{{$message}}</div>
                              @enderror
                           </div>

                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" type="submit">Register</button>
                              <a class="main_bt2" href="{{route('login')}}">Sing In</a>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset('backend/js/jquery.min.js')}}"></script>
      <script src="{{asset('backend/js/popper.min.js')}}"></script>
      <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{asset('backend/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{asset('backend/js/bootstrap-select.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('backend/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('backend/js/custom.js')}}"></script>
   </body>
</html>
