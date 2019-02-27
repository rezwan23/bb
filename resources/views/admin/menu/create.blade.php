@extends('admin.layouts.master')

@section('title', 'Add Menu')

@section('content')

    <div class="row">
        <div class="col-md-7">
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="tile-title float-left">Add Menu</h3>
                <a href="{{route('menu.index')}}" class="btn btn-primary float-right">All Menus</a>
                <div class="clearfix"></div>
                <div class="tile-body">
                    <form action="{{route('menu.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control {{$errors->has('name')?'is-invalid':''}}" type="text" name="name" placeholder="Enter Menu Name">
                            @if($errors->has('name'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('name')}}</div>
                            @endif
                        </div>

                        <div class="form-group internal_link">
                            <label class="control-label">Slug</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">www.batterybyte.com/</span></div>
                                <input class="form-control {{$errors->has('link')?'is-invalid':''}}" name="slug" id="exampleInputAmount" type="text" placeholder="Enter menu link">
                                @if($errors->has('slug'))
                                    <div class="form-control-feedback" style="color:red">{{$errors->first('slug')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mega Menu</label>
                            <select name="is_mega" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Menu Type</label>
                            <br>
                            <input type="radio" name="menuToggle" checked onclick="menutoggle()" value="0">Main Menu <br>
                            <input type="radio" name="menuToggle" onclick="menutoggle()" value="1">Sub Menu <br>
                        </div>
                        <div id="subMenuDiv" class="form-group" style="display:none">
                            <label class="control-label">Parent Menu</label>
                            <select class="form-control" name="parent_id">
                                <option>Select Parent Menu</option>
                                @foreach($menus as $menu)
                                    <option value="{{$menu->id}}">{{$menu->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Serial</label>
                            <input class="form-control" name="serial" type="number" value="0">
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" value="Add Menu" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        function menutoggle()
        {
            var i = $('input[name=menuToggle]:checked').val()
            switch(i){
                case '1':
                    $('#subMenuDiv').css('display','block');
                    break;
                default:
                    $('#subMenuDiv').css('display','none');
                    break;
            }
        }

    </script>
@endsection
