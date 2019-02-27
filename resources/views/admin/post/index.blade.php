@extends('admin.layouts.master')

@section('title', 'All Pages')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="float-left tile-title">All Posts</h3>
                <a href="{{route('post.create')}}" class="btn btn-primary float-right">Create New</a>
                <div class="tile-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Post Slug</th>
                            <th>Featured Media</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    <img src="{{asset('uploads/media/'.$post->media->getMedia('small'))}}" alt="">
                                </td>
                                <td class="action">
                                    <a style="color:#fff;margin-right: 4px;" href="{{route('post.edit', $post->slug)}}" title="Edit" data-toggle="tooltip" class="btn btn-primary btn-sm float-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form method="post" class="float-left" action="{{ route('post.destroy', $post->slug) }}" onsubmit="return confirm('Are your sure? you want to delete {{$post->name}}?');">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <button title="Delete" data-toggle="tooltip" type="submit" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
