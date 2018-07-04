@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center"> Welcome {{Auth::user()->first_name}}! What do you want do today? </h2>
        </div>
    </div>
    <div class="row">
        <div class="card col-md-3 col-md-offset-1">
            <h1 class="card-title">Sidebar</h1>
            <p> cevaaaa</p>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <h1> Content</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
