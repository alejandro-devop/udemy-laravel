@extends('layout')
@section('title', 'Contact')
@section('content')
<h1>Contact</h1>
@if(session('status'))
{{ session('status') }}
@else 
	@include('contact.form')
@endif
@endsection