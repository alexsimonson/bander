@extends('header')
@section('title', 'User Profile')

@section('content')
    <div class='row'>
        <div class='col-12 col-xl-6'>
            <card-frame>
                <div slot='header'>
                    <h2>Profile</h2>
                </div>
                <div slot='body'>
                    <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}'></search-display-card>
                </div>
            </card-frame>
        </div>

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
        <div class='col-12 col-xl-6'>
            <card-frame>
                <div slot='header'>
                    <h2>Matches</h2>
                </div>
                <div slot='body'>
                    <div class='row' style='overflow: scroll; height: 800px'>
                        @foreach ($matches as $user)
                        <div class='col-12 col-sm-12 col-md-6'>
                            <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}'></search-display-card>
                        </div>
                        @endforeach
                    </div>
                </div>
            </card-frame>
        </div>
    </div>
    
@endsection