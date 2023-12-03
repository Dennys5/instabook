@extends('layouts.app')

@section('title', 'Enregistrement d\'un fucking Book')

@section('content')

<h2>Enregistrement du fucking book {{$book['title']}}</h2>
<ul>
  <li>Author : {{$book['author_id']}}</li>
  <li>Genre : {{$book['genre_id']}}</li>
  <li>Synopsis : {{$book['synopsis_id']}}</li>
  <li>Year : {{$book['year']}}</li>
  <li>Note : {{$book['note_id']}}</li>
</ul>
@endsection
