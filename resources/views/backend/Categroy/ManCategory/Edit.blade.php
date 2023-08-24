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
                                <p class="Titel">Man Categroy</p>
                        </div>
                        <a class="addbutton btn btn-lg" href="{{route('Categroy/List')}}">Show List</a>
                        <form method="post" >
                        @csrf
                        @method('PUT')
                        <fieldset>
                            <div class="field">
                                <label class="label_field">Name</label>
                                <input type="text" name="Name" value="{{$datas->Name}}" placeholder="Name" />
                                @error('Name')
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
