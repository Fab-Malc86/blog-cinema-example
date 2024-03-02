<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner position-relative ">
        <div class="bg-black w-100 h-100 position-absolute z-2 opacity-25"></div>
        <div class="blackGradient position-absolute bottom-0 z-2"></div>
        <div class="carousel-item active overflow-hidden contCarusel ">
            <img src="\img\carousel\shutter-island.jpg" class="d-block w-100   " alt="...">
        </div>
        <div class="carousel-item overflow-hidden contCarusel">
            <img src="\img\carousel\avatar_2.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item overflow-hidden contCarusel">
            <img src="\img\carousel\jurassic-dominion.png" class="d-block w-100" alt="...">
        </div>
    </div>

    <button class="carousel-control-prev z-2" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next z-2" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-xl position-relative z-2">

    @auth
    <h2 class=" text-white pb-3  z-2  display-4 position-absolute bottom-0 mb-5 animate__animated animate__fadeInLeft  ">
        <span class="display-5">Benvenuto</span><br> {{auth()->user()->name}}
    </h2>
    @else
    <div class="container position-absolute bottom-0 p-0 mb-5 animate__animated animate__fadeInLeft">
        <h2 class=" text-white z-2 display-6 m-0 p-0 d-inline-block ">Benvenuto</h2><br>
        <h2 class=" text-white z-2 display-5 m-0 d-inline-block mb-2">Iscriviti al nostro blog</h2><br>
        <a href="{{ route('register') }}" class="btn btn-outline-danger    rounded-5  z-3 mb-4 px-3 fs-4">Iscriviti</a>
    </div>
    @endauth

    <div class="d-flex flex-column  align-items-end position-absolute end-0 bottom-0 mb-5 pb-5 animate__animated animate__fadeInRight ">
        <h2 class="text-white text-end  z-3 display-6 end-0 ">Film in evidenza</h2>
        <a href="#" class="btn btn-outline-danger  d-inline-block   rounded-5 px-3">Vai al Film</a>
    </div>
</div>