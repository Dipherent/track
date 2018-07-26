@extends('layouts.app')

@section('content')

<hr>
<h1>View All Activities</h1>
<hr>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Sport Activity</th>
      <th scope="col">Food Intake</th>
      <th scope="col">Other Notes</th>
    </tr>
    </thead>


    <tbody>

        @if(count($activities) > 0)
        @foreach($activities as $activity)
        <tr >
        <td class="table-light">{!!$activity->date!!}</td>
        <td class="table-info">{!!$activity->sport!!}</td>
        <td class="table-success">{!!$activity->food!!}</td>
        <td class="table-warning">{!!$activity->notes!!}</td>
        </tr>
        @endforeach
        @endif


    </tbody>
  </table>


@endsection
