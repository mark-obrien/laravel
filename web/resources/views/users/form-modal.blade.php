<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        {!! Form::open(['url' => 'everyone', 'encytype' => 'multipart/form-data', 'files' => true, 'class' => 'form-horizontal padding-15']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New User</h4>
            </div>
            <div class="modal-body">
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
                    {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::input('password', 'password', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('password-confirmation', 'Confirm Password', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::input('password', 'password-confirmation', null, ['class' => 'form-control']) !!}
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
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>