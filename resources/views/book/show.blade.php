@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
<div class="container-show">
    <div class="book-show">
        <div class="front">
            <div class="cover-show">
                <img src="https://cdn.discordapp.com/attachments/1154418633741709372/1179354957158305822/image.png?ex=65797ae5&is=656705e5&hm=f8d28f75579dbe1eb8be3ef13a6198cf1c90458cb7d53c6f60ace0e6e55a23a9&" alt="">
                    <p class=author>{{$book['author']}}</p>
            </div>
        </div>
        <div class="left-side">
            <h2>
                <span>{{$book['author']}}</span> 
                <span>{{$book['year']}}</span>
            </h2>
        </div>
    </div>
<div class="details">
    <h1>{{$book['title']}}</h1>
    <ul>
        <li>Auteur : {{$book['author']}}</li>
        <li>Genre : {{$book['genre']}}</li>
        <li>Année : {{$book['year']}}</li>
        <li>Note : {{$book['note']}}</li>
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