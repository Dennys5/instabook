@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
<div class="headline">
    <div class="showTitle">
        <h1>{{$book['title']}}</h1>
    </div>
    <div class="edit">
        <a href="{{route('book.edit', $book->id)}}"><button>Modifier</button></a>
    </div>
</div>

<div class="container-show">
    <div class="book-show">
        <div class="front">
            <div class="cover-show" style="background: url('{{asset("storage/images/".$book['image'])}}') ; background-size: cover ; background-repeat: no-repeat">
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
    
    <ul>
        <li>Auteur : {{$book['author_id']}}</li>
        <li>Synopsis : {{$book['synopsis_id']}}</li>
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