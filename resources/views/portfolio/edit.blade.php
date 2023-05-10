@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Edit "{{$project->title}}"</h1>
@include('partials.form-validations')
<form method="post" action="{{ route('portfolio.update', $project) }}">
	@csrf
	@method('PATCH')
	@include('partials.portfolio.project-form', ['bthText' => 'Actualizar'])
	{{-- <input type="hidden" name="_method" value="PATCH" /> --}}
	
</form>
@endsection