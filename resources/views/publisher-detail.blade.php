@extends('layouts/main')
@section('container')
@foreach($book_list as $bl)
    <div class="p-4 mb-3" style="background-color:darkgray; color: white; border-radius:1rem">
        <img src="{{ $bl->image }}" class="card-img-top" alt="...">
        <h1>{{ $bl->name }}</h1>
        <h4>Alamat: {{ $bl->address }}</h4>
        <h4>Phone: {{ $bl->phone }}</h4>
        <h4>Email: {{ $bl->email }}</h4>
    </div>
    <!-- cards -->
    <h1>Book List</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <!-- start of cards -->
         @foreach ( $bl->getBook as $b)
            <div class="col">
                <div class="card">
                    <img src="{{ $b->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $b->title }}</h5>
                        <p class="card-text">by <br>{{ $b->author }}</p>
                        <a href="{{ route('book-detail',['id'=>$b->id])}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
         @endforeach
        @endforeach
        <!-- end of card -->
    </div>
@endsection
