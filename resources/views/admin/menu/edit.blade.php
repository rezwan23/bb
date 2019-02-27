@extends('admin.layouts.master')

@section('title', 'Edit Menu')

@section('content')

    <div class="row">
        <div class="col-md-7">
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="tile-title float-left">Edit Menu</h3>
                <a href="{{route('menu.index')}}" class="btn btn-primary float-right">All Menus</a>
                <div class="clearfix"></div>
                <div class="tile-body">
                    <form action="{{route('menu.update', $menu->id)}}" method="post">
                        {{method_field('PUT')}}
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{$menu->name}}" type="text" name="name" placeholder="Enter Menu Name">
                            @if($errors->has('name'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mega Menu</label>
                            <select name="is_mega" class="form-control">
                                <option value="0" @if($menu->is_mega == 0) selected @endif>No</option>
                                <option value="1" @if($menu->is_mega == 1) selected @endif>Yes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Serial</label>
                            <input class="form-control" name="serial" type="number" value="{{$menu->serial}}">
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" value="Update Menu" class="btn btn-primary">
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
