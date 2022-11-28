@extends('layouts/main')
@section('container')
    <div class="p-2 mb-3" style="background-color:darkgray; color: white">
        <h1>Book Detail</h1>
    </div>

    <div class="card font-monospace">
        @foreach ($detail as $d)
            <img src="{{$d->image}}" class="card-img-top mx-auto d-block m-3" alt="..." style="max-width:50%">
            <div class="card-body">
            <h5 class="card-title">{{ $d->title }}</h5>
            <p class="card-text">Author: {{ $d->author }}</p>
            <p class="card-text">Publisher: {{ $d->getBookPublisher->name }}</p>
            <p class="card-text">Year: {{ $d->year }} </p>
            <p class="card-text">Synopsis: {{ $d-> synopsis }}</p>
            </div>
        @endforeach
    </div>
@endsection
