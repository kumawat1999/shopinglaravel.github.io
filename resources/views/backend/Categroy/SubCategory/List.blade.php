@include('backend.header')
@include('backend.sidbar')
 <!-- table section -->
 <div class="col-sm-3"></div>
 <div class="col-sm-9" style="margin-top: 80px">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <div class="center">
                <p class="Titel">Sub Categroy List
                    <a class="addbutton btn btn-lg" href="{{route('Sub/Categroy/Add')}}">Show Form</a>
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
                      <th>Sr. No.</th>
                      <th>Sub Categroy Name</th>
                      <th>Status</th>
                      <th>Categroy Name</th>
                      <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key=>$datas)
                    <tr>
                        <td>{{$key+1}}</td>
                        {{-- <td>{{$datas->Name}}</td> --}}
                        <td>{{$datas->getCategroy->Name}}</td>
                        <td>
                            @if($datas->SubStatus=='1')
                            <a href="{{route('Sub/Categroy/Status',$datas->id)}}" class=" btn btn-success ">YES</a>
                            @else
                            <a href="{{route('Sub/Categroy/Status',$datas->id)}}" class="btn btn-danger">NO</a>
                            @endif
                        </td>
                        <td>{{$datas->Names}}</td>
                        <td>
                            <a href="{{route('Sub/Categroy/Edit',$datas->id)}}"  class="btn btn-success ">Update</a>|
                            <a href="{{route('Sub/Categroy/Delete',$datas->id)}}"  class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
 <!-- table section -->
 @include('backend.footer')
