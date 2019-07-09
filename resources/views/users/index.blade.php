<h2>test</h2>
@foreach ($users as $user)
    First Name: {{$user->first_name}}<br>
    Last Name: {{$user->last_name}}<br>
@endforeach