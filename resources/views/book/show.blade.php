@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
<div class="container-show">
    <div class="book-show">
        <div class="front">
            <div class="cover-show">
                <img src="{{asset("storage/images/".$book['image'])}}" alt="">
                    <p class='author'>{{$book['author_id']}}</p>
            </div>
        </div>
        <div class="left-side">
            <h2>
                <span>{{$book['author_id']}}</span> 
                <span>{{$book['year']}}</span>
            </h2>
        </div>
    </div>
<div class="details">
    <h1>{{$book['title']}}</h1>
    <ul>
        <li>Auteur : {{$book['author_id']}}</li>
        <li>Genre : {{$book['genre_id']}}</li>
        <li>Année : {{$book['year']}}</li>
        <li>Note : {{$book['note_id']}}</li>
    </ul>
    <form action="{{route('book.destroy', $book['id'])}}" method="post" class="tool">
        @csrf
        @method('delete')
        <button type="submit">
         Delete the motherfucker
        </button>
    </form>
</div>
</div>

@endsection