@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Portfolio</h1>
<ul>
	
		@forelse($portfolio as $item)
			<li>
				<span>{{ $item['title'] }}</span>
				<small>{{ $loop->first ? "Es el primero" : "" }}</small>
				<small>{{ $loop->last ? "Es el ultimo" : "" }}</small>
			</li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	
		
</ul>
@endsection