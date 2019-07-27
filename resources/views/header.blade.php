<?php
//add in things that will be consistent across all files (header, footer, etc.)
?>
<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'No title set')</title>
        {{-- <!-- Latest compiled and minified CSS --> --}}
        {{-- Vue JS CDN --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        {{-- @extends('nav') --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Bander</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    

                    {{-- This is from the generated auth --}}
                    @auth
                        <li>
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                    @endauth
                </ul>
            </div>
        </nav>

        <div id='app'>
            @yield('content')
        </div>
        
        {{-- <!-- jQuery library --> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        
        {{-- <!-- Popper JS --> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
        {{-- <!-- Latest compiled JavaScript --> --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        {{-- This puts vue.js components everywhere --}}
        <script type='text/javascript' src='/js/app.js'></script>
        