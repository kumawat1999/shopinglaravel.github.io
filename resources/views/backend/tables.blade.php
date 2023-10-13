
             @include('backend.header')
             @include('backend.sidbar')
             <!-- dashboard inner -->
        {{-- <div class="midde_cont">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                            <div class="page_title">
                                <h2>Tables</h2>
                            </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row">
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Man Fashion Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <a href="{{route('main/list')}}">
                                                <img src="{{asset('images/man.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Woman Fashion Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                            <a href="{{route('woman/list')}}">
                                                <img src="{{asset('images/woman.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Child Fashion Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered">
                                            <a href="{{route('child/list')}}">
                                                <img src="{{asset('images/child.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Electronic 1 Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table table-hover">
                                            <a href="{{route('Electronic/list')}}">
                                                <img src="{{asset('images/Electronc1.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Electronic 2 Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table table-dark">
                                            <a href="{{route('Electronic2/list')}}">
                                                <img src="{{asset('images/Electronc2.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Electronic 3 Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table table-dark table-striped">
                                            <a href="{{route('Electronic3/list')}}">
                                                <img src="{{asset('images/Electronc3.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Jewellery 1 Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <a href="{{route('Jewellery1/list')}}">
                                                <img src="{{asset('images/Jewellery1.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-6">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Jewellery 2 Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <a href="{{route('Jewellery2/list')}}">
                                                <img src="{{asset('images/Jewellery2.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- table section -->
                            <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Jewellery 3 Table</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <a href="{{route('Jewellery3/list')}}">
                                                <img src="{{asset('images/Jewellery3.png')}}" width="400px" alt="">
                                            </a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                         <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                        </div>
                    </div>
                  </div>
                </div>
               <!-- end dashboard inner -->
            </div>
        </div>
        </div> --}}
            <!-- page content -->
          <style >
                .our-offerings {
                margin-left: 320px;
                margin-top: 83px;
            }
            .col4{
                background-color: rgb(240, 240, 240);
                width: 298px;
                margin: 20px;
                padding: 18px;
                border: 5px solid;
            }
            h2{
                font-size:24px;
            }
            p{
                margin-left: 108px;
                color: #58718a;
                font-size: 33px;
                margin-top: 41px;
                margin-bottom: 0rem;
            }

        </style>

	<div class="right_col" role="main">
		<div class="">
			<div class="row our-offerings">
                        {{-- user list url  --}}
                    <a href="">
                        <div class="col4">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> <?php echo "User List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">

                                        <tr>
                                            <td>
                                                <img src="{{asset('images/users.png')}}" style="height:95px" />
                                            </td>
                                            <td style="height:100px; text-align:center; font-size:30px; z-index: 5; position: relative; " >
                                                <p style="line-height:normal;" id="currord"> <?php echo $Usercountdata ; ?> </p>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>

                        {{-- Child list usr  --}}
                    <a href="{{route('child/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Children List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                            <p style="line-height:normal;" id="currord"> <?php echo $ChildModelcountdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>

                        {{-- man list usr  --}}
                    <a href="{{route('main/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Man List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $ManModelcountdata ; ?> </p>

                                            </td>


                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>

                        {{-- woman list url  --}}
                    <a href="{{route('woman/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Woman List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $WomanModelcountdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>

                        {{-- Electronic 1 list url  --}}
                    <a href="{{route('Electronic/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Electronic's 1 List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $ElectronicModelCountdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>


                        {{-- Electronic 2 list url  --}}
                    <a href="{{route('Electronic2/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Electronic's 2 List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $Electronic2Modelcountdata ; ?> </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>

                        {{-- Electronic 3 list url --}}
                    <a href="{{route('Electronic3/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Electronic's 3 List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $Electronic3ModelCountdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>


                        {{-- Jewellery 1 list url --}}
                    <a href="{{route('Jewellery1/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Jewellery 1 List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $Jewellery1Countdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>


                        {{-- Jewellery 2 list url --}}
                    <a href="{{route('Jewellery2/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Jewellery 2 List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $Jewellery2Countdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>


                            {{-- Jewellery 3 list url --}}
                    <a href="{{route('Jewellery3/list')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Jewellery 3 List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $Jewellery3Countdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>


                            {{-- ManCategory list url --}}
                    <a href="{{route('Categroy/List')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Man Category List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $ManCategoryCountdata ; ?> </p>

                                            </td>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>

                            {{-- SubCategroy list url --}}
                    <a href="{{route('Sub/Categroy/List')}}">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Sub Category List"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/users.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >

                                                <p style="line-height:normal;" id="currord"> <?php echo $SubCategroyModelCountdata ; ?> </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>


                            {{-- Title list url --}}
                    <a href="">
                        <div class="col4">
                            <div class="x_panel fixed_height_220">
                                <div class="x_title">
                                    <h2> <?php echo "Setting"; ?> </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="tile_info">
                                        <tr>
                                            <td><img src="{{asset('images/setting.png')}}" style="height:100px" /></td>
                                            <td style="height:100px; text-align:center; font-size:30px;z-index: 5; position: relative; " >
                                                <p style="line-height:normal;" id="currord"> </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </a>

			</div>
        </div>
	</div>

         <!-- model popup -->
         @include('backend.footer')
