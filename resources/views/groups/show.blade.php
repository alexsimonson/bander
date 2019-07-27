@extends('layouts.app')
@section('title', 'Group Profile')

@section('content')
    <div class='row'>
        <div class='col-12 col-xl-6'>
            <card-frame>
                <div slot='header'>
                    <h2>Profile</h2>
                </div>
                <div slot='body'>
                    <search-display-card id='{{$group->id}}' name='{{$group->name}}' bio='{{$group->bio}}' age='{{$group->age}}' image='{{$group->image}}'></search-display-card>
                </div>
            </card-frame>
        </div>

        <div class='col-12 col-xl-6'>
            <card-frame>
                <div slot='header'>
                    <h2>Members</h2>
                </div>
                <div slot='body'>
                    <div class='row' style='overflow: scroll; height: 800px'>
                        @foreach ($members as $user)
                        <div class='col-12 col-sm-12 col-md-6'>
                            <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}' url='/users/{{$user->id}}'></search-display-card>
                        </div>
                        @endforeach
                    </div>
                </div>
            </card-frame>
        </div>
    </div>
@endsection