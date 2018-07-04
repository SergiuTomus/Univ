@extends('layouts.app')

@section('content')

    <h1><b>Your Profile</b></h1>
    <form method="POST" action="{{route('')}}">
        <div class="form-group hidden">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PATCH">
        </div>
        <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label for="first_name" class="control-label"><b>First name:</b></label>
            <input type="text" name="first_name" placeholder="First name : " class="form-control" value="{{ $user->name }}"/>

            <?php if ($errors->has('first_name')) :?>
            <span class="help-block">
            <strong>{{$errors->first('first_name')}}</strong>
        </span>
            <?php endif;?>

        </div>
        <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label for="last_name" class="control-label"><b>Last name:</b></label>
            <input type="text" name="last_name" placeholder="Last name :" class="form-control" value="{{ $user->name }}"/>

            <?php if ($errors->has('last_name')) :?>
            <span class="help-block">
            <strong>{{$errors->first('last_name')}}</strong>
        </span>
            <?php endif;?>

        </div>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label"><b>Email:</b></label>
            <input type="text" name="email" placeholder="E-mail :" class="form-control" value="{{ $user->email }}"/>

            <?php if ($errors->has('email')) :?>
            <span class="help-block">
            <strong>{{$errors->first('email')}}</strong>
        </span>
            <?php endif;?>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default"> Submit </button>
        </div>
    </form>
@endsection
