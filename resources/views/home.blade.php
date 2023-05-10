@extends('layout')
@section('title', 'Home')
@section('content')
<h1>Home</h1>
@guest
	You need to log in
@else
	Welcome {{ auth()->user()->name }}
@endguest

@endsection