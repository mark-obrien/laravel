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
    {!! Form::label('title', 'Title', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ['placeholder' => 'Project Title', 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('image', 'Project Logo', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::file('image', '', ['placeholder' => 'Project Logo', 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('users', 'Project Users', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::select('project_users[]', ['derp' => 'derp'], null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
</div>
<hr>
<div class="form-group">
    <div class="col-md-offset-3 col-sm-9 ">
        {!! Form::submit('Create Project', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}