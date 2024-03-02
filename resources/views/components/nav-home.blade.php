<nav class="navbar navbar-expand-lg bg-black  z-3  bg-transparent w-100 position-fixed">
    <div class="container-xl px-3 py-3 ">
        <a class="navbar-brand title1 text-white fw-light " href="{{ route('home') }}">AFTER <span class="title2 text-danger fw-bold ">MOVIES</span></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  "></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between ms-md-1" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 text-center ">
                <li class="nav-item">
                    <a class="nav-link active text-white navItem" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navItem" href="{{ route('movies') }}">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navItem" href="{{ route('articles') }}">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navItem" href="{{ route('contacts') }}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white navItem" href="#">About-Us</a>
                </li>

            </ul>
            <div class="row align-items-center ">
                <div class="col ">
                    <form class="d-flex m-0 align-items-center justify-content-end  z-3" role="search">
                        <input class=" border  me-2 bg-transparent text-white  rounded-5 px-3  z-3  " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn " type="submit"><i class="bi bi-search text-white fs-5 z-3"></i></button>
                    </form>
                </div>
                <div class="col ">
                    @auth
                    <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('articles.index')}}">Gestisci Articoli</a></li>
                                <li><a class="dropdown-item" href="{{ route('movie.index')}}">Gestisci Film</a></li>
                                <li><a class="dropdown-item" href="{{ route('categories.index')}}">Gestisci Categorie</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Log out</button>
                                    </form>
                            </ul>
                        </li>
                    </ul>
                    @else
                    <button type="button" class="btn bg-white rounded-5 logIn z-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Log in
                    </button>
                    <x-login-modal />
                    @endauth
                </div>

            </div>


        </div>
    </div>
</nav>