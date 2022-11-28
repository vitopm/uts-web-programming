@extends('layouts/main')
@section('container')
@foreach($book_list as $bl)
    <div class="p-4 mb-3 font-monospace" style="background: linear-gradient(to right, #ccffcc 72%, #0033cc64 100%); color: black; border-radius:1rem">
        <img src="{{ $bl->image }}" class="card-img-top" alt="..." style="max-width:20vw; text-align:center">
        <h1>{{ $bl->name }}</h1>
        <p>Alamat: {{ $bl->address }}</p>
        <p>Phone: {{ $bl->phone }}</p>
        <p>Email: {{ $bl->email }}</p>
    </div>
    <!-- cards -->
    <h1>Book List</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4 font-monospace">
        <!-- start of cards -->
         @foreach ( $bl->getBook as $b)
            <div class="col">
                <div class="card">
                    <img src="{{ $b->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $b->title }}</h5>
                        <p class="card-text">by <br>{{ $b->author }}</p>
                        <a href="{{ route('book-detail',['id'=>$b->id])}}" class="btn btn-primary d-grid gap-2" style="background: linear-gradient(to top, #66ccff 72%, #ffff66 100%); color: black">Detail</a>
                    </div>
                </div>
            </div>
         @endforeach
        @endforeach
        <!-- end of card -->
    </div>
@endsection
