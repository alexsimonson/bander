<h2>HTML</h2>
Basic interfacing with php: {{gettype($users)}}<br>
{{-- Ctrl + / makes this html comment quickly :) --}}
@php
    //this is a shortcut for opening/closing php
@endphp
@foreach ($users as $user)
    First Name: {{$user->first_name}}<br>
    Last Name: {{$user->last_name}}<br>
@endforeach