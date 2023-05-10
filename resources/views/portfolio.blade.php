@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Portfolio</h1>
<ul>
	<a href="{{ route('portfolio.create') }}">Crear</a>
		@forelse($portfolio as $item)
			<li>
				<span>{{ $item->title }}</span>
				<p>{{ $item->description }}</p>
				<a href="{{ route('portfolio.show', $item) }}">View</a>
				<a href="{{ route('portfolio.edit', $item) }}">Edit</a>
			</li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	
		
</ul>
@endsection