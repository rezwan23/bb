@extends('admin.layouts.master')

@section('content')

    <div class="tile">
        <h3 class="tile-title float-left">View Media</h3>
        <a href="{{route('media.index')}}" class="btn btn-sm float-right btn-primary">All Media</a>
        <div class="clearfix"></div>
        <div class="row clearfix">
            <div class="col-md-6">
                <div>
                    <img class="img-fluid" src="{{asset('uploads/media/'.$media->getMedia('featured'))}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="image_featured" type="text" value="{{asset('uploads/media/'.$media->getMedia('featured'))}}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-warning btn-sm" id="featured" onclick="copyLink(this.id);">Copy Featured</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="image_thumb" type="text" value="{{asset('uploads/media/'.$media->getMedia('thumb'))}}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-warning btn-sm" id="thumb" onclick="copyLink(this.id);">Copy Thumb</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="image_small" type="text" value="{{asset('uploads/media/'.$media->getMedia('small'))}}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-warning btn-sm" id="small" onclick="copyLink(this.id);">Copy Small</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="image_featured_thumb" type="text" value="{{asset('uploads/media/'.$media->getMedia('featured_thumb'))}}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-warning btn-sm" id="featured_thumb" onclick="copyLink(this.id);">Copy Featured Thumb</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="image_title" type="text" value="{{$media->title}}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-warning btn-sm" id="title" onclick="copyLink(this.id);">Copy Title</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        function copyLink(id){
            var copyText = document.getElementById("image_"+id);
            copyText.select();
            document.execCommand("copy");
            alert("Copied the text: " + copyText.value);
        }
    </script>

@endsection