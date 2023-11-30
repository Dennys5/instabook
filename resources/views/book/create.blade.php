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
    <span class="label">Titre :</span> <input type='text' name='title' placeholder='Titre du book' value='{{old('title')}}'>
    @if($errors->has('title'))
        <p>{{$errors->first('title')}}</p>
    @endif
    <br>
    {{-- <span class="label">Author: </span><input type='name' name='author' placeholder='Auteur' value='{{old('author')}}'><br> --}}
    <span class="label">Auteur: </span><select name='author'>
        @foreach ($author as $authors)
        <option value='{{$authors['id']}}' 
        @if($authors['id']==old('author_id'))
        selected
        @endif
        >{{$authors['name']}}</option>
        @endforeach
    </select><br>
    <span class="label">Année:</span> <input type='number' name='year' placeholder="Année" value='{{old('year')}}'>
    @if($errors->has('year'))
        <p>{{$errors->first('year')}}</p>
    @endif
    <br>
    <span class="label">Genre: </span><select name='genre'>
        @foreach ($genres as $genre)
        <option value='{{$genre['id']}}' 
        @if($genre['id']==old('genre_id'))
        selected
        @endif
        >{{$genre['name']}}</option>
        @endforeach
    </select><br>
    <span class="label">Tag: </span><input type='text' name='tag' placeholder='Tag' value='{{old('tag')}}'><br>
    @if($errors->has('tag'))
        <p>{{$errors->first('tag')}}</p>
    @endif
    <span class="label">Note: </span><input type='number' name='note' placeholder='Note' value='{{old('note')}}'><br>
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