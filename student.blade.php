@extends('layouts.app')

@section('content')
<p>Name: {{ $name }}</p>
<p>Course: {{ $course }}</p>
<p>Welcome to your dashboard!</p>
<p>@upper('hello student')</p>
<p>@lower('HELLO STUDENT')</p>
@endsection

<h2>Subjects</h2>

@if($isEnrolled)
<ul>
    @foreach($subjects as $subject)
    <li>{{ $subject }}</li>
    @endforeach
</ul>
@else
<p>You are not enrolled.</p>
@endif