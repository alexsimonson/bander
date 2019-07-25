@extends('header')
@section('title', 'User Index')

@section('content')
    <h4>Each user in the database</h4>
    @foreach ($users as $user)
        <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}'></search-display-card>
        <br>
    @endforeach
@endsection