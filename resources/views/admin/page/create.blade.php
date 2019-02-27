@extends('admin.layouts.master')


@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-title float-left">Create New Page</h3>
                <a href="{{route('page.index')}}" class="btn btn-primary float-right">All pages</a>
                <div class="clearfix">  </div>
                <div class="tile-body clearfix">
                    <form action="{{route('page.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <textarea class="form-control" name="title" rows="2" placeholder="Enter page title"></textarea>
                            @if($errors->has('title'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('title')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Content</label>
                            <textarea id="editor" class="form-control" name="content" rows="2" placeholder="Enter page content"></textarea>
                            @if($errors->has('content'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('content')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Style</label>
                            <textarea class="form-control" name="style" rows="2" placeholder="Enter page custom style"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Meta</label>
                            <textarea class="form-control" name="meta" rows="2" placeholder="Enter page meta"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer')

    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endsection
