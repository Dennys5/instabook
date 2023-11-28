@extends('layouts.app')
@section('title', 'New Book')
@section('content')



@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action='{{route("book.store")}}' method='post'>
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
Genre: <input type='name' name='genre' placeholder='Genre' value='{{old('genre')}}'><br>
@if($errors->has('genre'))
    <p>{{$errors->first('genre')}}</p>
@endif
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

@endsection