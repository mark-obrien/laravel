{!! Form::open(['url' => 'projects']) !!}
<div class="form-group">
    {!! Form::text('name', null, ['placeholder' => 'Project Title', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create Project', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}