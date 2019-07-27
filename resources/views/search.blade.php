@extends('layouts.app')
@section('title', 'Search')

@section('content')
@php
$userAuth = Auth::user();
if($userAuth==null){
    return abort(404, 'not logged in, this use case is not necessary');
}
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
<card-frame>
    <div slot='header'>
        <h2>Potential New Friends</h2>
    </div>
    
    <div slot='body'>
        <div class='row'>
            @foreach ($potentialUsers as $user)
                <div class='col-12 col-md-12 col-lg-6 col-xl-4'>
                    <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}'></search-display-card>
                    <br>
                    <match-request id='{{$user->id}}' name='{{$user->name}}'></match-request>
                    <br><br>
                </div>
            @endforeach
        </div>
    </div>
</card-frame>
@endsection