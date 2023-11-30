@extends('layouts.app')
@section('title', 'New Book')
@section('content')


<div class="create-box">
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action='{{route("book.store")}}' method='post' enctype="multipart/form-data">
    @csrf
    Titre : <input type='text' name='title' placeholder='Titre du book' value='{{old('title')}}'>
    @if($errors->has('title'))
        <p>{{$errors->first('title')}}</p>
    @endif
    <br>
    Author: <input type='name' name='author' placeholder='Auteur' value='{{old('author')}}'><br>
    Année: <input type='number' name='year' placeholder="Année" value='{{old('year')}}'>
    @if($errors->has('year'))
        <p>{{$errors->first('year')}}</p>
    @endif
    <br>
    Genre: <select name='genre'>
        @foreach ($genres as $genre)
        <option value='{{$genre['id']}}' 
        @if($genre['id']==old('genre_id'))
        selected
        @endif
        >{{$genre['name']}}</option>
        @endforeach
    </select><br>
    Tag: <input type='text' name='tag' placeholder='Tag' value='{{old('tag')}}'><br>
    @if($errors->has('tag'))
        <p>{{$errors->first('tag')}}</p>
    @endif
    Note: <input type='number' name='note' placeholder='Note' value='{{old('note')}}'><br>
    @if($errors->has('note'))
        <p>{{$errors->first('note')}}</p>
    @endif
    <input type="file" name="image" accept="image/png, image/jpeg">
    @if($errors->has('image'))
        <p>{{$errors->first('image')}}</p>
    @endif
    <input type='submit' value='Créer'>
    </form>
</div>


@endsection