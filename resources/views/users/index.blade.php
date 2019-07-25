@extends('header')
@section('title', 'User Index')

@section('content')
    <card-frame>
        <div slot='header'>
            <h4>Each user in the database</h4>
        </div>
        <div slot='body'>
            <div class='row'>
                @foreach ($users as $user)
                <div class='col-12 col-md-12 col-lg-6 col-xl-4'>
                    <search-display-card id='{{$user->id}}' name='{{$user->name}}' bio='{{$user->bio}}' age='{{$user->age}}' image='{{$user->image}}'></search-display-card>
                    <br>
                </div>
                @endforeach
            </div>
        </div>
    </card-frame>
@endsection