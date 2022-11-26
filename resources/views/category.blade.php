@extends('layouts/main')

@section('container')

@foreach($book_list as $bl)
    <div class="p-2 mb-3" style="background-color:darkgray; color: white">
        <h1>{{ $bl->name }} Book List</h1>
    </div>
    <!-- cards -->
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <!-- start of cards -->
            @foreach ( $bl->getBookCategory as $b)
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
