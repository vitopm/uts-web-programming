@extends('layouts/main')
@section('container')
    <div class="p-2 mb-3 font-monospace" style="background: linear-gradient(to bottom left, #33ccff 0%, #ffda33 100%);color: black; border-radius:1rem">
        <h1>Book List</h1>
    </div>
    <!-- cards -->
    <div class="row row-cols-1 row-cols-md-5 g-4 font-monospace">
        <!-- start of cards -->
        @foreach($book as $b)
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
        <!-- end of card -->
    </div>
@endsection
