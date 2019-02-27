@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-6">
            @include('admin.layouts.messages')
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="tile-title">Site Configuration</h3>
                <form action="{{route('configuration')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" placeholder="Enter Site Name" name="name" value="{{!empty($configuration)?$configuration->name:''}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Logo</label>
                            <input class="form-control" type="file" name="logo" onchange="readURL(this);">
                        </div>
                        <div class="form-group">
                            <label for="image">Selected Image</label>
                            <img width="400px" height="70px" id="blah" src="{{!empty($configuration)?asset('uploads/'.$configuration->logo):asset('uploads/empty.jpg')}}" alt="your image" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Meta</label>
                            <textarea class="form-control" name="meta" rows="2" cols="10">{{!empty($configuration)?$configuration->meta:''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Facebook</label>
                            <input class="form-control" type="text" placeholder="Enter Facebook Link" name="fb" value="{{!empty($configuration)?$configuration->fb:''}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pinterest</label>
                            <input class="form-control" type="text" placeholder="Enter Pinterest Link" name="pinterest" value="{{!empty($configuration)?$configuration->pinterest:''}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Google Plus</label>
                            <input class="form-control" type="text" placeholder="Enter Google Plus Link" name="g_plus" value="{{!empty($configuration)?$configuration->g_plus:''}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Twitter</label>
                            <input class="form-control" type="text" placeholder="Enter Twitter Link" name="twitter" value="{{!empty($configuration)?$configuration->twitter:''}}">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
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
                        .attr('src', e.target.result)
                        .width(400)
                        .height(70);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection