@extends('header')
@section('title', 'User Profile')

@section('content')
    <h2>Profile</h2>
    Name: {{$user->name}}<br>
    Email: {{$user->email}}<br>
    Age: {{$user->age}}<br>
    @php
        //this combines all matches, regardless of order into one collection
        $usersLikedFirst = $user->usersLikedFirst;
        $usersLikedSecond = $user->usersLikedSecond;
        $matches = collect();
        foreach($usersLikedFirst as $user){
            $matches->add($user);
        }
        foreach($usersLikedSecond as $user){
            $matches->add($user);
        }
    @endphp
    <h2>Matches</h2>
    @foreach ($matches as $item)
        User ID: {{$item->id}}<br>
        Name: {{$item->name}}<br>
        Bio: {{$item->bio}}<br>
    @endforeach
    <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}'></search-display-card>
@endsection