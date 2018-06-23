@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="row">
        @foreach ($users as $user)
            <div class="card-deck col-sm-4 col-xs-12">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="{{ $user->photo }}" alt="{{ $user->firstName }} {{ $user->lastName }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->firstName }} {{ $user->lastName }}</h5>
                        <p class="card-text">ID: {{ $user->id }}</p>
                        <p class="card-text">E-mail: {{ $user->email }}</p>
                        <a href="{{ route('user.times', ['userId' => $user->id]) }}" class="btn btn-primary">Time punches</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
