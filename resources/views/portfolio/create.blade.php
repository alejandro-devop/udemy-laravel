@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Crear proyecto</h1>
@include('partials.form-validations')
<form method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
	@include('partials.portfolio.project-form', ['bthText' => 'Guardar'])
</form>
@endsection