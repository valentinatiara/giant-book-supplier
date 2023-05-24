@extends('master')
@section('content')

    <div class="row">
        <p class="fs-2 bg-secondary text-white">
            {{$title}} <br>
            {{$address}} <br>
            {{$phone}} <br>
            {{$email}}
        </p>

        <div class="row d-flex justify-content-center">
            @foreach ($books as $book)
                <div class="card p-1 mx-2 mb-2 justify-content-between" style="width: 10rem;">
                    <img src="{{$book->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">{{$book->author}}</p>
                        <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection