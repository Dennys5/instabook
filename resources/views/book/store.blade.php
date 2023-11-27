@extends('layouts.app')

@section('title', 'Enregistrement d\'un fucking Book')

@section('content')

<h2>Enregistrement du fucking book {{$title}}</h2>
<ul>
  <li>Author : {{$author}}</li>
  <li>Genre : {{$genre}}</li>
  <li>Year : {{$year}}</li>
  <li>Note : {{$note}}</li>
</ul>
@endsection
