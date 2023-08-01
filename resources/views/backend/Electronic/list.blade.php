@include('backend.header')
@include('backend.sidbar')
 <!-- table section -->
 <div class="col-sm-3"></div>
 <div class="col-sm-9" style="margin-top: 80px">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <div class="center">
                <p class="Titel">Electronic's 1 Item
                    <a class="addbutton btn btn-lg" href="{{route('Electronic/form')}}">Show Form</a>
                    <button class="addbutton btn btn-lg">Go To Trash List</button>
                </p>
            </div>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-dark table-striped">
                <thead>
                   <tr>
                      <th>Sr. No.</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Photo</th>
                      <th>Action</th>
                      <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                    @foreach ($SendData as $key=>$data)
                   <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$data->Title}}</td>
                      <td>{{$data->Price}}</td>
                      <td>
                        <img src="/images/{{$data->Photo}}" width="80px" />
                    </td>
                    <td><a type="button" class="btn btn-success" >Edit</a></td>
                    <td><a type="button" class="btn btn-danger" >Delete</a></td>
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

