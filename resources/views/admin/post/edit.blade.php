@extends('admin.layouts.master')

@section('title', 'Edit Post')

@section('head')
    <style>
        .select2-container--default .select2-selection--multiple {
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 4px;
            cursor: text;
            width: 77%;
        }
    </style>
    @endsection

@section('content')

    <div class="row">
        <div class="col-md-8">
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="tile-title float-left">Edit Post</h3>
                <a href="{{route('post.index')}}" class="btn btn-primary float-right">Back to Posts</a>
                <div class="clearfix">  </div>
                <div class="tile-body clearfix">
                    <form action="{{route('post.update', $post->slug)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <textarea class="form-control" name="title" rows="2" placeholder="Enter page title">{{$post->title}}</textarea>
                            @if($errors->has('title'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('title')}}</div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-12">Category</label>
                            <div class="col-md-12">
                                <select name="category_id[]" multiple id="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option @foreach($post->categories as $cat)@if($cat->id==$category->id) selected="selected" @endif @endforeach value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-12">Tag</label>
                            <div class="col-md-12">
                                <select name="tag_id[]" multiple id="tag_id" class="form-control">
                                    @foreach($tags as $tag)
                                        <option @foreach($post->tags as $t)@if($t->id==$tag->id) selected="selected" @endif @endforeach value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-12">Media</label>
                            <div class="col-md-12">
                                <select name="featured_media_id" id="media_id" class="form-control">
                                    @foreach($medias as $media)
                                        <option @if($post->media->id==$media->id) selected="selected" @endif value="{{$media->id}}">{{$media->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Content</label>
                            <textarea id="editor" class="form-control" name="content" rows="2" placeholder="Enter page content">{{$post->content}}</textarea>
                            @if($errors->has('content'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('content')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Style</label>
                            <textarea id="editor" class="form-control" name="style" rows="2" placeholder="Enter page custom style">{{$post->style}}</textarea>
                            @if($errors->has('style'))
                                <div class="form-control-feedback" style="color:red">{{$errors->first('style')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Meta</label>
                            <textarea id="editor" class="form-control" name="meta" rows="2" placeholder="Enter page meta info">{{$post->meta}}</textarea>
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
    <script src="{{asset('admin/js/plugins/select2.min.js')}}"></script>
    <script>
        $('#category_id').select2();
        $('#tag_id').select2();
        $('#media_id').select2();
    </script>

    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            startupMode : 'source',
        });
    </script>
@endsection
