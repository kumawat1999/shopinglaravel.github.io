  <!-- Sidebar  -->
  <nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('backend/images/logo/logo_icon.png')}}" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="{{asset('backend/images/layout_img/user_img.jpg')}}" alt="#" /></div>
             <div class="user_info">
                <h6>John David</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>General</h4>
       <ul class="list-unstyled components">
          <li class="active">
             <a href="{{route('dashboard/page')}}" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
          </li>


          <li>
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Fashion Dress</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li><a href="{{route('main/list')}}"><span>Main Dress</span></a></li>
                <li><a href="{{route('woman/list')}}"><span>Womain Dress</span></a></li>
                <li><a href="{{route('child/list')}}"><span>Child Dress</span></a></li>
             </ul>
          </li>

          <li>
             <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Electronic</span></a>
             <ul class="collapse list-unstyled" id="apps">
                <li><a href="{{route('Electronic/list')}}"> <span>Electronic 1</span></a></li>
                <li><a href="{{route('Electronic2/list')}}"> <span>Electronic 2</span></a></li>
                <li><a href="{{route('Electronic3/list')}}"> <span>Electronic 3</span></a></li>
             </ul>
          </li>
          <li>
             <a href="#appss" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Jewellery</span></a>
             <ul class="collapse list-unstyled" id="appss">
                <li><a href="{{route('Jewellery1/list')}}"> <span>Jewellery 1</span></a></li>
                <li><a href="{{route('Jewellery2/list')}}"> <span>Jewellery 2</span></a></li>
                <li><a href="{{route('Jewellery3/list')}}"> <span>Jewellery 3</span></a></li>
             </ul>
          </li>
          <li>
             <a href="#categroy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Categroys</span></a>
             <ul class="collapse list-unstyled" id="categroy">
                <li><a href="{{route('Categroy/List')}}"> <span>Man Categroy</span></a></li>
                <li><a href="{{route('main/relationShip')}}"> <span>RelationShip</span></a></li>
                <li><a href="{{route('Sub/Categroy/List')}}"> <span>Sub Categroy</span></a></li>
             </ul>
          </li>

          <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
       </ul>
    </div>
 </nav>
 <!-- end sidebar -->
