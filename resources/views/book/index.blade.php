@extends('layouts.app')
@section('title', 'Books')
@section('content')

<div class="bigCont">
    <h1>helloooooo</h1>
    @foreach($book as $books => $details)
    <div class="container">
        <a class="link" href="{{route('book.show', $details->id)}}"><h2 class="title">{{$details->title}}</h2></a> 
        <a  href="{{route('book.edit', $details->id)}}">Modifier</a> 
        <p>{{$details->author}}</p> 
        <p>{{$details->year}}</p>
        <p>{{$details->genre}} </p>
        <p>{{$details->note}} </p>
        
    </div>
@endforeach
</div>

@endsection