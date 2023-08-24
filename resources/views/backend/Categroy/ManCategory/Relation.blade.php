

@include('backend.header')
@include('backend.sidbar')
 <!-- table section -->
 <div class="col-sm-3"></div>
 <div class="col-sm-9" style="margin-top: 80px">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <div class="center">
                    <p class="Titel">Man Categroy
                        <a class="addbutton btn btn-lg" href="{{route('Categroy/Add')}}">Show Form</a>
                        <button class="addbutton btn btn-lg">Go To Trash List</button>
                    </p>
                </div>
            </div>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Foren Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$data->getSubCategroy->Name}}</td>

                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
 <!-- table section -->
 @include('backend.footer')
