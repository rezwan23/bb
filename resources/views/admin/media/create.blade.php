@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-title float-left">New Media</h3>
                <a href="{{route('media.index')}}" class="btn btn-primary float-right">All Media</a>
                <div class="clearfix"></div>
                <form action="{{route('media.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter media title">
                            {!!$errors->first('title', '<div class="text-danger">:message</div>')!!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Media</label>
                            <input class="form-control" type="file" name="media" onchange="readURL(this);">
                            {!!$errors->first('media', '<div class="text-danger">:message</div>')!!}
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <img class="img-fluid" id="blah" style="border: 2px dashed #000" src="{{asset('/uploads/empty.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                    </div>
                </form>
            </div>
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


    </script>
@endsection