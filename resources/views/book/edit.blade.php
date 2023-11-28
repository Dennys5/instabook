@extends('layouts.app')

@section('title', 'Modification d\'un fucking Book')

@section('content')

  @if($errors->any())
    <ul>
      @foreach ($errors as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

  <form class="editForm" action='{{route("book.update", $book['id'])}}' method='post'>
    @csrf
    @method('put')
    Titre :
    <input type='text' name='title' placeholder='Titre du book' value='{{old('title',$book['title'])}}'>
    @if($errors->has('title'))
        <p>{{$errors->first('title')}}</p>
    @endif
    <br>
    Année :
    <input type='number' name='year' placeholder="Année" value='{{old('year',$book['year'])}}'>
    @if($errors->has('year'))
        <p>{{$errors->first('year')}}</p>
    @endif
    <br>
    Auteur :
<input type='text' name='author' placeholder="Auteur" value='{{old('author',$book['author'])}}'>
    @if($errors->has('author'))
        <p>{{$errors->first('author')}}</p>
    @endif
    <br>
    Genre :
<input type='text' name='genre'  placeholder="Genre" value='{{old('genre',$book['genre'])}}'><br>
@if($errors->has('genre'))
<p>{{$errors->first('genre')}}</p>
@endif
Note :
<input type='number' name='note'  placeholder="Note" value='{{old('note',$book['note'])}}'><br>
@if($errors->has('note'))
<p>{{$errors->first('note')}}</p>
@endif
    <input type='submit' value='Modifier the motherfucker'>
    </form>
    @endsection