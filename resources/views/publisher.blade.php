@extends('layouts/main')

@section('container')

    <!-- bikin looping tiap publisher -->
    <div class="p-2 mb-3 font-monospace" style="background: linear-gradient(to left, #c4ed09 0%, #e7dbe2 100%);color: black">
        <h1>Publishers</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 font-monospace">
        <!-- start of cards -->
        @foreach($publishers as $p)
            <div class="col">
                <div class="card">
                    <img src="{{ $p->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <p class="card-text">Address: {{ $p->address }}</p>
                        <p class="card-text">Phone: {{ $p->phone }}</p>
                        <p class="card-text">Email: {{ $p->email }}</p>
                        <a href="{{ route('publisher-detail',['id'=>$p->id])}}" class="btn btn-primary" style="background: linear-gradient(to top, #66ccff 72%, #ffff66 100%);">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- end of card -->
    </div>

    <!-- bikin looping card buat cari buku untuk tiap publisher -->

@endsection
