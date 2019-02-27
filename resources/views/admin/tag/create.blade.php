@extends('admin.layouts.master')

@section('title', 'Create new category')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" method="post" action="{{route('tag.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="tile">
                    <h3 class="tile-title float-left">New Category</h3>
                    <a class="btn btn-primary float-right" href="{{route('tag.index')}}">*All Tags</a>
                    <div class="clearfix"></div>
                    <div class="tile-body">

                        <div class="form-group row">
                            <label class="control-label col-md-3">Tag Name</label>
                            <div class="col-md-8">
                                <input id="name" class="form-control {{$errors->has('name')? 'is-invalid' : ''}}" type="text" name="name" placeholder="Enter Tag Name">
                                {!!$errors->first('name', '<div class="text-danger">:message</div>')!!}
                            </div>
                        </div>

                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
