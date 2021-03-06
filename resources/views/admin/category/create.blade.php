@extends('admin.layouts.master')

@section('title', 'Create new category')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="tile">
                    <h3 class="tile-title float-left">New Category</h3>
                    <a class="btn btn-primary float-right" href="{{route('category.index')}}">*All Categories</a>
                    <div class="clearfix"></div>
                    <div class="tile-body">

                        <div class="form-group row">
                            <label class="control-label col-md-3">Category Name</label>
                            <div class="col-md-8">
                                <input id="name" class="form-control {{$errors->has('name')? 'is-invalid' : ''}}" type="text" name="name" placeholder="Enter Category Name">
                                {!!$errors->first('name', '<div class="text-danger">:message</div>')!!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Category type</label>
                            <div class="col-md-8">
                                <select class="form-control" name="type" id="type" onchange="categoryTypeToggle();">
                                    <option value="1">Main Category</option>
                                    <option value="0">Sub Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="catToggle" style="display:none">
                            <div class="row form-group">
                                <label class="control-label col-md-3">Parent Category</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="parent_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Category Image <span class="help-block">(600x600)</span></label>
                            <div class="col-md-8">
                                <input class="form-control {{$errors->has('image')? 'is-invalid' : ''}}" name="image" type="file" onchange="readURL(this);">
                                {!!$errors->first('image', '<div class="text-danger">:message</div>')!!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="control-label col-md-3"></div>
                            <div class="col-md-8">
                                <img id="blah" src="{{asset('/uploads/empty.jpg')}}" style="border:2px #282923 dashed" width="150px" height="auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('footer')
    <script>

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function categoryTypeToggle()
        {
            var i = $('#type option:selected').val();
            switch(i){
                case '1':
                    $('#catToggle').css('display', 'none');
                    break;
                default:
                    $('#catToggle').css('display', 'block');
                    break;
            }
        }

    </script>
@endsection
