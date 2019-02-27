@extends('admin.layouts.master')

@section('title', 'All Menus')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('admin.layouts.messages')
            <div class="tile">
                <h3 class="tile-title float-left">All menus</h3>
                <a href="{{route('menu.create')}}" class="float-right btn btn-primary">Add New</a>
                <div class="tile-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Submenu</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$menu->name}}</td>
                                <td> {{$menu->slug}} </td>
                                <td> <a href="{{route('submenu.index', $menu->id)}}" class="badge badge-primary">Submenu({{$menu->subMenus->count()}})</a> </td>

                                <td class="action">
                                    <a style="color:#fff" href="{{route('menu.edit', $menu->id)}}" title="Edit" data-toggle="tooltip" class="btn btn-primary float-left"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form method="post" class="float-left" action="{{ route('menu.destroy', $menu->id) }}" onsubmit="return confirm('Are your sure? you want to delete {{$menu->name}}?');">
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
