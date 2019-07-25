@extends('header')
@section('title', 'Search')

@section('content')
@php
$userAuth = Auth::user();
$allUsers = App\User::all();
$matches = collect();
$ulfAuth = $userAuth->usersLikedFirst;
$ulsAuth = $userAuth->usersLikedSecond;
foreach($ulfAuth as $ul){
    $matches->add($ul);
}
foreach($ulsAuth as $ul){
    $matches->add($ul);
}

$removeUsers = array();
//add authenticated user to ignore array
$removeUsers[] = $userAuth->id;
foreach($matches as $match){
    $removeUsers[] = $match->id;
}
//query users not in the list we made
$potentialUsers = App\User::whereNotIn('id', $removeUsers)->get();

@endphp

@foreach ($potentialUsers as $user)
    <card-frame>
        <div slot='header'>
            <h2>Profile</h2>
        </div>
        <div slot='body'>
            <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}'></search-display-card>
        </div>
    </card-frame>
@endforeach

@endsection