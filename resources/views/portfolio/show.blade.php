@extends('layout')
@section('title', "View - " . $project->title)

@section('content')
<h2>{{$project->title}}</h2>
<p>{{ $project->description }}</p>
<p>{{ $project->created_at }}</p>
@endsection
