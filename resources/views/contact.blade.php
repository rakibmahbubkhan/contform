@extends('layouts.app')

@section('content')

<h1>Contact</h1>

{!! Form::open(['url' => 'contact/submit', 'class' => 'py-5']) !!}

    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Username']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'E-Mail Address') }}
        {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com']) }}
    </div>

    <div class="form-group">
        {{ Form::label('message', 'Description') }}
        {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message']) }}
    </div>

    {{ Form::submit('Submit',['class' => 'btn btn-outline-primary']) }}
    

{!! Form::close() !!}

@endsection