     @extends('front.commen')
     @section('contant')

     <style>
        .fashion_taital{
                color: rgb(247, 247, 246);
                font-size: 60px;
                margin-top: 30px;
        }
    </style>
  <!-- fashion section start -->
  <div class="fashion_section">
     <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
           <div class="carousel-item active">
              <div class="container">
                 <h1 class="fashion_taital">Man & Woman Fashion</h1>
                 <div class="fashion_section_2">
                    <div class="row">
                        @foreach ($ElectronicModel as $data)

                       <div class="col-lg-4 col-sm-4">
                          <div class="box_main">
                             <h4 class="shirt_text">{{$data->Title}}</h4>
                             <p class="price_text">Price  <span style="color: #262626;">$ {{$data->Price}}</span></p>
                             <div class="tshirt_img"><img src="/images/{{$data->Photo}}"></div>
                             <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <div class="seemore_bt"><a href="#">See More</a></div>
                             </div>
                          </div>
                       </div>
                       @endforeach


                    </div>
                 </div>
              </div>
           </div>
           <div class="carousel-item">
              <div class="container">
                 <h1 class="fashion_taital">Man & Woman Fashion</h1>
                 <div class="fashion_section_2">
                    <div class="row">
                        @foreach ($Electronic2Model as $data)
                       <div class="col-lg-4 col-sm-4">
                          <div class="box_main">
                             <h4 class="shirt_text">{{$data->Title}}</h4>
                             <p class="price_text">Price  <span style="color: #262626;">$ {{$data->Price}}</span></p>
                             <div class="tshirt_img"><img src="/images/{{$data->Photo}}"></div>
                             <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <div class="seemore_bt"><a href="#">See More</a></div>
                             </div>
                          </div>
                       </div>
                       @endforeach
                    </div>
                 </div>
              </div>
           </div>
           <div class="carousel-item">
              <div class="container">
                 <h1 class="fashion_taital">Man & Woman Fashion</h1>
                 <div class="fashion_section_2">
                    <div class="row">
                        @foreach ($Electronic3Model as $data)
                       <div class="col-lg-4 col-sm-4">
                          <div class="box_main">
                             <h4 class="shirt_text">{{$data->Title}}</h4>
                             <p class="price_text">Price  <span style="color: #262626;">$ {{$data->Price}}</span></p>
                             <div class="tshirt_img"><img src="/images/{{$data->Photo}}"></div>
                             <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <div class="seemore_bt"><a href="#">See More</a></div>
                             </div>
                          </div>
                       </div>
                       @endforeach
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        </a>
     </div>
  </div>
  <!-- fashion section end -->
  @endsection
