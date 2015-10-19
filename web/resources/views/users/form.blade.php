{!! Form::open(['encytype' => 'multipart/form-data', 'files' => true, 'class' => 'form-horizontal padding-15']) !!}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="avatar" class="col-sm-3 control-label">Profile Picture</label>
    <div class="col-sm-9">
        <div class="media">
            <div class="media-left">
                <img src="{{url('images/guy.jpg')}}" width="80" alt="person">
            </div>
            <div class="media-body media-middle">
                <input type="file" class="filestyle">
                <small class="text-muted bold">Size 80x80px</small>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-9">
        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
        {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-3 control-label">Company</label>
    <div class="col-sm-9">
        {!! Form::text('company', null, ['class' => 'form-control']) !!}
    </div>
</div>
<hr>
<div class="form-group">
    <div class="col-md-offset-3 col-sm-9 ">
        {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}