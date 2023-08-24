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
                                <p class="Titel">Sub Categroy Form</p>
                        </div>
                        <a class="addbutton btn btn-lg" href="{{route('Sub/Categroy/List')}}">Show List</a>
                        <form method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>

                            <div class="field">
                                <label class="label_field">Categroy</label>
                                <select name="ForenKey">
                                @foreach ($datasss as $data)
                                <option value="{{$datasss->id}}">{{$datasss->Name}}</option>
                                @endforeach
                                </select>
                                @error('ForenKey')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label_field">SubCategroy</label>
                                <input type="text" name="Names" value="{{$datas->Names}}" placeholder="SubCategroy Names" />
                                @error('Names')
                                    <div class="errormessage">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="label_field"></label>
                                <button class="main_add" type="submit">Sub Categroy Add</button>
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
