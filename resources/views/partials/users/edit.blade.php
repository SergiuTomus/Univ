@extends('layouts.app')

@section('content')

    <form method="post" action="route('users.edit', $user)">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <label>Firstname </label>
        <input type="text" name="first_name"  value="{{ $user->first_name }}" />
        <br>
        <label> Lastname</label>
        <input type="text" name="last_name"  value="{{ $user->last_name }}" />
        <br>
        <label> Email</label>
        <input type="email" name="email"  value="{{ $user->email }}" />
        <br>
        <button type="submit">Send</button>
    </form>

@endsection
