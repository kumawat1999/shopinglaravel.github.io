@include('backend.header')
@include('backend.sidbar')
<div class="container" style="margin-top:80px;">
<div class="row">
    <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="center ">
                <div class="login_section">
                    <div class="login_form">
                        <div class="center">
                                <p class="Titel">Woman Fashion Edit Form</p>
                        </div>
                        <a class="addbutton btn btn-lg" href="{{route('woman/list')}}">Show List</a>
                        <form method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <fieldset>
                            <div class="field">
                                <label class="label_field">Title</label>
                                <input type="text" name="Title" value="{{$data->Title}}" placeholder="Title" />
                                @error('Title')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="label_field">Price </label>
                                <input type="text" name="Price" value="{{$data->Price}}" placeholder="Price" />
                                @error('Price')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="label_field">Photo</label>
                                <input type="text" name="Photo_hidden" value="{{$data->Photo}}" />
                                <input type="file" name="Photo"  />
                                @error('Photo')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="label_field"></label>
                                <button class="main_add" type="submit">Add</button>
                            </div>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backend.footer')
