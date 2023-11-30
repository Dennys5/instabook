@extends('layouts.app')
@section('title', 'Books')
@section('content')

<div class="bigCont">
    
@foreach($book as $books => $details)
<div class="container-index">
    <div class="book-index">
      <div class="title">
        <a class="link" href="{{route('book.show', $details->id)}}" style="color: white"><p>{{$details->title}}</p></a>
      </div>
      <div class="book-cover cover1" style="background: ('http://fuel-design.com/media/uploads/publications/Soviet_Space_Dogs_cover.jpg')">
        <div class="effect"></div>
        <div class="light"></div>
      </div>
      <div class="book-inside">
      </div>
    </div>
</div>
@endforeach
@endsection