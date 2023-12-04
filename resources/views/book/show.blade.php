@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
<div class="headline">
    <div class="showTitle">
        <h1>Détails du livre</h1>
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
      @if (Auth::check())
    @if(Auth::User()->id == $book->user_id)
    <div class="edit">
        <div class="edit-cont">
            <form action="{{route('book.edit', $book['id'])}}" method="post" class="tool">
                @csrf
                @method('put')
                <button type="submit" id="submit-btn" class="show-btn">
                    Modifier
                </button>
            </form>
        </div>
        <div class="delete-cont">
            <form action="{{route('book.index', $book['id'])}}" method="post" class="tool">
                @csrf
                @method('delete')
                <button type="submit" id="submit-btn" class='show-btn'>
                    Supprimer
                </button>
            </form>
        </div>
    </div>
    @endif
    @endif
        <div class="show-syn">
            <p><span>synopsis :</span> {{$book['synopsis_id']}}</p>
        </div>
       
        <div class="in-a-row">
           <p><span>Genre :</span> {{$book['genre_id']}}</p>
           <p><span>Année :</span> {{$book['year']}}</p>
           <p><span>Note :</span> {{$moyenne}} /5</p>
        </div>

    <form action='{{route('book.store_note', $book->id)}}' method='post'>
        @csrf
        @method('patch')
        <div class="bottom-cont">
            <input type="number" name="note" placeholder="Noter /" min="0" max="5">
            <button type="submit" id="submit-btn">Valider</button>
        </div>
        
    </form>
</div>
</div>

@endsection