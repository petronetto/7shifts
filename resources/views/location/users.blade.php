@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">
                <a href="#"> {{ $user->id }} </a>
            </th>
            <td> {{ $user->firstName }} {{ $user->lastName }} </td>
            <td> {{ $user->email }} </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
