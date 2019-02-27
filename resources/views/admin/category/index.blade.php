@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title float-left">All Categories</h3>
                <a href="{{route('category.create')}}" class="btn btn-primary float-right">New Category</a>
                <div class="clearfix"></div>
                <div class="tile-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <img src="{{asset('uploads/'.$category->image)}}" width="150px" height="80px" alt="">
                                </td>
                                <td class="action">
                                    <a style="color:#fff" href="{{route('category.edit', $category->slug)}}" title="Edit" data-toggle="tooltip" class="btn btn-primary float-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form method="post" class="float-left" action="{{ route('category.destroy', $category->slug) }}" onsubmit="return confirm('Are your sure? you want to delete {{$category->name}}?');">
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