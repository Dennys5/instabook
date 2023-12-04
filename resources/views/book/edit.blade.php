@extends('layouts.app')
@section('title', 'Modification d\'un fucking Book')
@section('content')

<h2 class="post">Modifie ton livre</h2>

<div class="create-box">

  @if($errors->any())
    <ul>
      @foreach ($errors as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

  <form class="editForm" action='{{route("book.update", $book['id'])}}' method='post' enctype="multipart/form-data">
    @csrf
    @method('put') 
    <div class="file">
      <div class="phrase">
          Ajoute une photo de couverture.
      </div>
          <div class="file-box">
      <input type="file" name="image" accept="image/png, image/jpeg">
      @if($errors->has('image'))
          <p>{{$errors->first('image')}}</p>
      @endif
          </div>
  </div>
  
  <div class="big">
      <div class="title-cont">
        <div class="title-title">
            Titre
        </div>
        <div class="title-input">
          <input type="text" name="title" placeholder="ex : Laravel Pour Les Nuls">
            @if($errors->has('title'))
              <p>{{$errors->first('title')}}</p>
            @endif
        </div>
      </div>    
  
      <div class="synopsis-cont">
          <div class="syn-title">
              Résumé 
          </div>
          <div class="syn-input">
            <textarea name="synopsis" placeholder="ex : Tu es nul en laravel ? Ce livre est fait pour toi !"></textarea>
              @if($errors->has('synopsis'))
                <p>{{$errors->first('synopsis')}}</p>
              @endif
            
          </div>
      </div> 
  </div>
  
  <div class="select">
      <div class="select-author">
         <span>Auteur</span> &nbsp;
          <select class="select-author" name='author'>
              @foreach ($author as $authors)
              <option value='{{$authors['id']}}' 
              @if($authors['id']==old('author_id'))
              selected
              @endif
              >{{$authors['name']}}</option>
              @endforeach
          </select>
      </div>
      <div class="select-genre">
          <span>Genre</span> &nbsp;
          <select name='genre'>
              @foreach ($genres as $genre)
              <option value='{{$genre['id']}}' 
              @if($genre['id']==old('genre_id'))
              selected
              @endif
              >{{$genre['name']}}</option>
              @endforeach
          </select>
      </div>
      <div class="select-year">
          <span>Année</span> &nbsp;
          <input type="number" name='year' placeholder="ex : 1939" value='{{old('year')}}'>
          @if($errors->has('year'))
            <p>{{$errors->first('year')}}</p>
          @endif
      </div>
  </div> 
  
  <div class="submit-cont">
      <div class="submit-note">
          <span>Note / 5</span> &nbsp;
          <input type="number" name="note" value='{{old('year')}}' min="0" max="5" placeholder="ex : 0"> 
          @if($errors->has('note'))
          <p>{{$errors->first('note')}}</p>
      @endif
      </div>
      <div class="submit-btn">
        <input type="submit" value="Modifier" id="submit-btn">

        
      </div>
  </div> 
  
      </form>
  </div>    


    @endsection