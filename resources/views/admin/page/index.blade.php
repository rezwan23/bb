@extends('admin.layouts.master')

@section('title', 'All Pages')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="float-left tile-title">All Pages</h3>
                <a href="{{route('page.create')}}" class="btn btn-primary float-right">Create New</a>
                <div class="tile-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Page Slug</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->slug}}</td>
                                <td class="action">
                                    <a style="color:#fff" href="{{route('page.edit', $page->slug)}}" title="Edit" data-toggle="tooltip" class="btn btn-primary float-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form method="post" class="float-left" action="{{ route('page.destroy', $page->slug) }}" onsubmit="return confirm('Are your sure? you want to delete {{$page->name}}?');">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <button title="Delete" data-toggle="tooltip" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
