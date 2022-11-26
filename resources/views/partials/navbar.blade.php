
{{-- title book store --}}
<div class="p-5" style="background-color:chartreuse; text-align: center; color: white"><h1>Giant Book Store</h1></div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('book-category',['id'=>1]) }}">Romance</a></li>
                        <li><a class="dropdown-item" href="{{ route('book-category',['id'=>2]) }}">Action</a></li>
                        <li><a class="dropdown-item" href="{{ route('book-category',['id'=>3]) }}">Fiction</a></li>
                        <li><a class="dropdown-item" href="{{ route('book-category',['id'=>4]) }}">Comedy</a></li>
                        <li><a class="dropdown-item" href="{{ route('book-category',['id'=>5]) }}">Anime</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publisher') }}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
