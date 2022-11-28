
{{-- title book store --}}
<div class="p-5 .bg-success.bg-gradient font-monospace" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); text-align: center; color: black"><h1>Giant Book Store</h1></div>

<nav class="navbar navbar-expand-lg navbar-light bg-light font-monospace" style="background: linear-gradient(to top, #0099ff 0%, #ff99cc 100%);">
    <div class="container" style="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style = "color: black">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a class="nav-link active" href="{{ route('publisher') }}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
