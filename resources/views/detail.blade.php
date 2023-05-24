@extends('master')

@section('content')
    
    <div class="col">
        <div class="row">
            <p class="fs-2 bg-secondary text-white">
                {{$title}}
            </p>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{$book->image}}" alt="" width="100%">
        </div>
        <p>Title: {{$book->title}}</p>
        <p>Author: author</p>
        <p>Publisher: {{ $book->publisher->name }}</p>
        <p>Year: {{$book->year}}</p>
        <p>Synopsis:</p>
        <p>{{$book->synopsis}}</p>
    </div>

@endsection