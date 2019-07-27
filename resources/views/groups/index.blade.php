@extends('layouts.app')
@section('title', 'Group Index')

@section('content')
    <card-frame>
        <div slot='header'>
            <h4>Each group in the database</h4>
        </div>
        <div slot='body'>
            <div class='row'>
                @foreach ($groups as $group)
                <div class='col-12 col-md-12 col-lg-6 col-xl-4'>
                    <search-display-card id='{{$group->id}}' name='{{$group->name}}' bio='{{$group->bio}}' age='{{$group->genre}}' image='{{$group->image}}' url='/groups/{{$group->id}}'></search-display-card>
                    <br>
                </div>
                @endforeach
            </div>
        </div>
    </card-frame>
@endsection