@extends('layouts.app')
@section('title', 'Books')
@section('content')

<div class="bigCont">
    
    @foreach($book as $books => $details)
    <div class="container">
        <div class="book">
            <div class="front">
                <div class="cover">
                    <img src="https://cdn.discordapp.com/attachments/1154418633741709372/1179051219612872724/instabook.png?ex=65786004&is=6565eb04&hm=2dd9d2a04dcf1ea0c2470b2c8650c09ff8e893cb33213f8205719f48f0cff816&" alt="">
                    <p class=author>{{$details->author}}</p>
                </div>
            </div>
            <div class="left-side">
                <h2>
                    <span>{{$details->author}}</span> 
                    <span>{{$details->year}}</span>
                </h2>
            </div>
        </div>
    </div>
    </div>
@endforeach
@endsection