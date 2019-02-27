@if(count($errors->all())>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap!</strong><a class="alert-link" href="#">{{$error}}</a>
        </div>
    @endforeach
@endif

@if(Session::has('success-message'))

    <div class="alert alert-dismissible alert-success">
        <button class="close" type="button" data-dismiss="alert">×</button><strong>Success!</strong>{{Session::get('success-message')}}
    </div>
@endif
