@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
<div class="headline">
    <div class="showTitle">
        <h1>{{$book['title']}}</h1>
    </div>
    @if(Auth::User()->id == $book->user_id)
    <div class="edit">
        <a href="{{route('book.edit', $book->id)}}"><button>Modifier</button></a>
    </div>
    @endif
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
        <li>Note : {{$moyenne}}</li>
    </ul>
    @if(Auth::User()->id == $book->user_id)
    <form action="{{route('book.destroy', $book['id'])}}" method="post" class="tool">
        @csrf
        @method('delete')
        <button type="submit">
        Delete the motherfucker
        </button>
    </form>
    @endif

    <form action='{{route('book.store_note', $book->id)}}' method='post'>
        @csrf
        @method('patch')
        <input type="number" name="note" placeholder="Note" min="0" max="5">
        <input type="text" name="comment" placeholder="Commentaire">
        <button type="submit">Valider</button>
    </form>
</div>
</div>

@endsection