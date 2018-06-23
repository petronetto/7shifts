@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Address</th>
      <th scope="col">Daily Overtime</th>
      <th scope="col">Weekly Overtime</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($locations as $location)
        <tr>
            <th scope="row">
            <a href="{{ route('location.users', ['locationId' => $location->id]) }}"> {{ $location->id }} </a>
            </th>
            <td> {{ $location->address }} </td>
            <td> {{ $location->labourSettings->dailyOvertimeThreshold }} </td>
            <td> {{ $location->labourSettings->weeklyOvertimeThreshold }} </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
