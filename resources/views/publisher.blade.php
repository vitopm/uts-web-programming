@extends('layouts/main')

@section('container')

    <!-- bikin looping tiap publisher -->
    <div class="p-2 mb-3" style="background-color:darkgray; color: white">
        <h1>Publishers</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
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

                        <a href="#" class="btn btn-primary">View Books</a>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- end of card -->
    </div>

    <!-- bikin looping card buat cari buku untuk tiap publisher -->

@endsection
