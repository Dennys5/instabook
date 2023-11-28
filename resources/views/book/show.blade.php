@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
    <h2>{{$book['title']}}
        <form action="{{route('book.destroy', $book['id'])}}" method="post" class="tool">
            @csrf
            @method('delete')
            <button type="submit">
             Delete the motherfucker
            </button>
        </form>
    </h2>
    <ul>
        <li>Auteur : {{$book['author']}}</li>
        <li>Genre : {{$book['genre']}}</li>
        <li>Année : {{$book['year']}}</li>
        <li>Note : {{$book['note']}}</li>
    </ul>

@endsection