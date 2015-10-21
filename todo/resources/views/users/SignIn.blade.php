@extends('Layout.main')
@section('content')
        <section id="signin-form">
                        <h1>I have an account</h1>

                            @if($errors->has())
                                                <div class="form-errors">
                                                        <ul>
                                                            @foreach($errors->all() as $error)
                                                                    <li>{{$error}}</li>
                                                            @endforeach
                                                        </ul>
                                                </div>
                                             @endif

                         {!!Form::open(array('method'=>'POST', 'url'=>'users/signin'))!!}
                                                    <p>

                                                    {!!Form::label('Email')!!}
                                                    <img src="{{asset("img/email.gif")}}" alt="Email Address">
                                                    {!!Form::text('email')!!}
                                                    </p>
                                                    <p>
                                                    {!!Form::label('Password')!!}
                                                    <img src="{{asset('img/password.gif')}}" alt="Password">
                                                    {!!Form::password('password')!!}
                                                    </p>
                                                    <p>
                                                    {!!Form::submit('Login', array('class'=>'secondary cart-btn'))!!}
                                                    </p>

                                            {!!Form::close()!!}
                    </section><!-- end signin-form -->
                    <section id="signup">
                        <h2>I'm a new customer</h2>
                        <h3>You can create an account in just a few simple steps.<br>
                            Click below to begin.</h3>

                        <a href="#" class="default-btn">CREATE NEW ACCOUNT</a>
                    </section><!--- end signup -->

                    <hr />
@endsection
