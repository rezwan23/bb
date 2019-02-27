@extends('admin.layouts.master')

@section('title', 'Edit Page')

@section('content')

    <div class="row">
        <div class="col-md-8">
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="tile-title float-left">Edit Page</h3>
                <a href="{{route('page.index')}}" class="btn btn-primary float-right">Back to Pages</a>
                <div class="clearfix">  </div>
                <div class="tile-body clearfix">
                    <form action="{{route('page.update', $page->slug)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <textarea class="form-control" name="title" rows="2" placeholder="Enter page title">{{$page->title}}</textarea>
                            @if($errors->has('title'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('title')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Content</label>
                            <textarea id="editor" class="form-control" name="content" rows="2" placeholder="Enter page content">{{$page->content}}</textarea>
                            @if($errors->has('content'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('content')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Style</label>
                            <textarea id="editor" class="form-control" name="style" rows="2" placeholder="Enter page custom style">{{$page->style}}</textarea>
                            @if($errors->has('style'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('style')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Meta</label>
                            <textarea id="editor" class="form-control" name="meta" rows="2" placeholder="Enter page meta info">{{$page->meta}}</textarea>
                            @if($errors->has('meta'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('meta')}}</div>
                            @endif
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
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
