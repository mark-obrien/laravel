{!! Form::open(['url' => 'projects', 'encytype' => 'multipart/form-data', 'files' => true]) !!}
<div class="form-group">
    {!! Form::text('title', null, ['placeholder' => 'Project Title', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::file('image', '', ['placeholder' => 'Project Logo', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create Project', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}