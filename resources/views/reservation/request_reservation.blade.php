@extends('layouts.master')
@section('title')
@section('content')

 
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>ユーザーID</th>
            <th>会場ID</th>
            <th>何時から</th>
        </tr>
    </thead>
    <tbody>
  {{-- $reservationsから順に値を取り出して$valに代入します。 --}}
  @foreach ($reservations as $val) 
 
    {{-- $valの値を使い、その中にある各項目の値を表示します。--}}
    <tr>
        <td>{{$val->id}}</td>
        <td>{{$val->user_id}}</td>
        <td>{{$val->room_id}}</td>
        <td>{{$val->starts_at}}</td>
    </tr>
 
  @endforeach
    </table>
 
@endsection