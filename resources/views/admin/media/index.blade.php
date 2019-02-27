@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="tile">
                <h3 class="tile-title float-left">All Media</h3>
                <a href="{{route('media.create')}}" class="btn btn-primary float-right">New Media</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Media</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($medias as $media)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$media->title}}</td>
                            <td>
                                <img src="{{asset('uploads/media/'.$media->getMedia('small'))}}" alt="">
                            </td>
                            <td class="action">
                                <a href="{{route('media.show', $media->id)}}" style="color:#fff;margin-right:4px;"  class="btn btn-warning btn-sm float-left"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <form method="post" class="float-left" action="{{ route('media.destroy', $media->id) }}" onsubmit="return confirm('Are your sure? you want to delete {{$media->title}}?');">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <button title="Delete" data-toggle="tooltip" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection