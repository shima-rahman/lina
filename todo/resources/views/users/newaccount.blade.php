@extends('Layout.main')
@section('content')

    <div id="new-account">
    <h3>Create New Account</h3>

            @if($errors->has())
                       <div class="form-errors">
                       <p>the following error have occured:</p>
                       <ul>
                           @foreach($errors->all() as $error)
                                   <li>{{$error}}</li>
                           @endforeach

                       </ul>
                       </div>
                       @endif
                {!! Form::open(array('url' => array('users/create'))) !!}
                               <div class="form-group">
                              {!!Form::label('Firstname')!!}

                              {!!Form::text('firstname')!!}
                              </div>
                              <p>
                              {!!Form::label('Lastname')!!}
                              {!!Form::text('lastname')!!}
                              </p>
                              <p>
                              {!!Form::label('Email')!!}
                               {!!Form::text('email')!!}
                               </p>
                               <p>
                               {!!Form::label('Password')!!}
                               {!!Form::password('password')!!}
                               </p>
                                <p>
                                                               {!!Form::label('password_confirmation')!!}
                                                               {!!Form::password('password_confirmation')!!}
                                                               </p>

                                 <p>
                                {!!Form::label('Telephone')!!}
                                {!!Form::text('telephone')!!}
                                 </p>
                               <p>
                              {!! Form::submit('Create New Account', array('class' => 'secondary cart-btn')) !!}
                              </p>
                {!! Form::close() !!}
                </div>

@endsection