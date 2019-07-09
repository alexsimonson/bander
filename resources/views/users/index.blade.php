<h1>Basic HTML</h1>

{{-- Control + / key opens comments (this is an html comment) --}}
<h2>Basic PHP interfacing</h2>
<h3>{{gettype($users)}}</h3>

<h4>Each user in the database</h4>
@foreach ($users as $user)
    First Name: {{$user->first_name}}<br>
    Last Name: {{$user->last_name}}<br>
@endforeach

Registering is broken btw :)