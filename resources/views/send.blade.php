@php
use App\Mail\TestEmail;
$data = ['message' => 'This is a test!']
Mail::to('shaggy7569@gmail.com')->send(new TestEmail($data));
@endphp