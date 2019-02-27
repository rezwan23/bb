@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title float-left">All Tags</h3>
                <a href="{{route('tag.create')}}" class="btn btn-primary float-right">New Tag</a>
                <div class="clearfix"></div>
                <div class="tile-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->slug}}</td>
                                <td class="action">
                                    <a style="color:#fff" href="{{route('tag.edit', $tag->slug)}}" title="Edit" data-toggle="tooltip" class="btn btn-primary float-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form method="post" class="float-left" action="{{ route('tag.destroy', $tag->slug) }}" onsubmit="return confirm('Are your sure? you want to delete {{$tag->name}}?');">
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