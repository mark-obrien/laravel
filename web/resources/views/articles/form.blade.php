<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Body') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Published At') !!}
    {!! Form::input('date', 'published_at', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_button_text, ['class' => 'btn btn-primary form-control']) !!}
</div>