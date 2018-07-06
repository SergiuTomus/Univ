@extends('layouts.app')

@section('content')
    {!! Form::model($user, ['action' => ['UserController@update', 'id' => $user['id']], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('first_name', 'Name') !!}
        {!! Form::text('first_name', $user->first_name, [
            'class' => 'form-control'
        ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last_name', 'Name') !!}
        {!! Form::text('last_name', $user->last_name, [
            'class' => 'form-control'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::text('email', $user->email, [
            'class' => 'form-control'
        ]) !!}
    </div>


    <p><button type="submit" class="btn btn-primary">Update Profile</button></p>
    {!! Form::close() !!}
@endsection
