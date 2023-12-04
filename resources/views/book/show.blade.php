@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
<div class="headline">
    <div class="showTitle">
        <h1>{{$book['title']}}</h1>
        <h1>{{$book['author_id']}}</h1>
    </div>
    @if (Auth::check())
    @if(Auth::User()->id == $book->user_id)
    <div class="edit">
        <a href="{{route('book.edit', $book->id)}}"><button type="submit" id="submit-btn">Modifier</button></a>
    </div>
    @endif
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
        <div class="show-syn">
            <li> {{$book['synopsis_id']}}</li>
        </div>
       
        <div class="in-a-row">
           <li>Genre : {{$book['genre_id']}}</li>
           <li>Année : {{$book['year']}}</li>
           <li>Note : {{$moyenne}} /5</li>
        </div>
    </ul>
    @if (Auth::check())
    @if(Auth::User()->id == $book->user_id)
    <form action="{{route('book.destroy', $book['id'])}}" method="post" class="tool">
        @csrf
        @method('delete')
        <button type="submit" id="submit-btn">
        Supprimer
        </button>
    </form>
    @endif
    @endif

    <form action='{{route('book.store_note', $book->id)}}' method='post'>
        @csrf
        @method('patch')
        <div class="bottom-cont">
            <input type="number" name="note" placeholder="Noter" min="0" max="5">
            <input type="text" name="comment" placeholder="Commenter">
        </div>
        
        <button type="submit" id="submit-btn">Valider</button>
    </form>
</div>
</div>

@endsection