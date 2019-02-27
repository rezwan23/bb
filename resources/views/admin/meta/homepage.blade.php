@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title float-left">Home Page</h3>
                <div class="clearfix"></div>
                <form action="{{route('page.home')}}" method="post">
                    <div class="tile-body">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Type</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="1" name="type" @if(!empty($meta)) {{$meta->meta=='1'?'checked':''}} @endif onchange="homePageToggle();" type="radio" id="default_type" name="type">default
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="0" name="type" onchange="homePageToggle();"@if(!empty($meta)) {{$meta->meta!=1?'checked':''}} @endif type="radio" id="post_type" name="type">Post
                                </label>
                            </div>
                        </div>
                        <div class="form-group" id="post_slug"@if(!empty($meta)) {{$meta->meta!='1'?'style="display:none"':''}} @endif>
                            <label class="control-label">Post Slug</label>
                            <input class="form-control" name="meta" type="text"value="{{!empty($meta)?$meta->meta:''}}" placeholder="Enter Post Slug">
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
        function homePageToggle() {
            var type = $('input[type=radio]:checked').val();
            switch (type) {
                case '1':
                    $('#post_slug').css('display', 'none');
                    break;
                default:
                    $('#post_slug').css('display', 'block');
                    break;
            }
        }
    </script>
@endsection