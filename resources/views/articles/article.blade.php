<x-layout-main>
  <x-nav />
  <div class="container mt-3 ">
    <h1 class="text-center text-white mb-4">Articolo</h1>
    <div class="cover  position-relative overflow-hidden d-flex flex-column justify-content-end ">

      <div class="blackGradient position-absolute bottom-0 "></div>
      <img src="{{Storage::url($articles->img) }}" alt="" class="d-block img-fluid">
    </div>
    <div class="row mt-5 ">
      <div class="col-4">
        <img src="{{Storage::url($articles->img) }}" alt="" class="img-fluid rounded-4 ">
        <h3 class="text-white mt-3 ">Title: {{ $articles->title }}</h3>
        <h5 class="text-white mt-3 ">Category: {{ $articles->category->name }}</h5>
      </div>

      <div class="col-8  px-4 ">
        <p class="text-white fs-5  fw-light ">{{ $articles->body }}</p>
        <a href="{{ route('articles') }}" class="btn rounded-5 bg-body-secondary  my-3">Torna indietro</a>
      </div>
    </div>

  </div>
</x-layout-main>