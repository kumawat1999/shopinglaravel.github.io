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
      <title>Shopping Tool</title>
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
      <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{asset('backend/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('backend/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('backend/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
    <!-- topbar -->
    <div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
       <div class="full">
          <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
          <div class="logo_section">
             <a href="index.html"><img class="img-responsive" src="{{asset('backend/images/logo/logo.png')}}" alt="#" /></a>
          </div>
          <div class="right_topbar">
             <div class="icon_info">
                <ul>
                   <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                   <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                   <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                </ul>
                <ul class="user_profile_dd">
                   <li>
                      <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset('backend/images/layout_img/user_img.jpg')}}" alt="#" /><span class="name_user">John David</span></a>
                      <div class="dropdown-menu">
                         <a class="dropdown-item" href="profile.html">My Profile</a>
                         <a class="dropdown-item" href="settings.html">Settings</a>
                         <a class="dropdown-item" href="help.html">Help</a>
                         <span>
                         <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out">Log Out</i></a>
                        </span>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </nav>
 </div>
 <!-- end topbar -->
