@extends('layouts.app')
@section('title', 'Books')
@section('content')

<div class="container-index">
    
@foreach($book as $books => $details)

    <div class="book-index">
      <div class="title">
        <a class="link" href="{{route('book.show', $details->id)}}" style="color: white"><p>{{$details->title}}</p></a>
      </div>
      <div class="book-cover cover1" style="background: url('{{asset("storage/images/".$details->image)}}') ; background-size: cover;
        background-repeat: no-repeat;
        width: 100%">
        <div class="effect"></div>
        <div class="light"></div>
      </div>
      <div class="book-inside">
      </div>
    </div>
 
  
@endforeach
  </div>

@endsection