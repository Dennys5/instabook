@extends('layouts.app')

@section('title', 'Détails d\'un Book')

@section('content')
    <h2>{{$book['title']}}  </h2>
    <ul>
        <li>Auteur : {{$book['author']}}</li>
        <li>Genre : {{$book['genre']}}</li>
        <li>Année : {{$book['year']}}</li>
        <li>Note : {{$book['note']}}</li>
        <img src="{{asset("storage/images/".$book['image'])}}" alt="{{$book['title']}}">
    </ul>
    Note livre : <input type='number' name='note' placeholder='Note' value='{{old('note')}}'><br>
@if($errors->has('note'))
    <p>{{$errors->first('note')}}</p>
@endif
    <form action="{{route('book.destroy', $book['id'])}}" method="post" class="tool">
        @csrf
        @method('delete')
        <button type="submit">
         Delete the motherfucker
        </button>
    </form>

@endsection