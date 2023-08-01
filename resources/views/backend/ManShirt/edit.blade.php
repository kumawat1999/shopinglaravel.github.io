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
                                <p class="Titel">Shirt & Scart</p>
                        </div>
                        <button class="addbutton btn btn-lg">Show List</button>
                        <form method="post">
                        @csrf
                        <fieldset>
                            <div class="field">
                                <label class="label_field">Title</label>
                                <input type="text" name="name" value="{{old('Title')}}" placeholder="Title" />
                                @error('Title')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="label_field">Price </label>
                                <input type="text" name="email" value="{{old('Price')}}" placeholder="Price" />
                                @error('Price')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="label_field">Photo</label>
                                <input type="file" name="Photo" value="{{old('Photo')}}" placeholder="Photo" />
                                @error('Photo')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>
                            <a class="main_add" href="{{route('login')}}">Add List</a>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backend.footer')
