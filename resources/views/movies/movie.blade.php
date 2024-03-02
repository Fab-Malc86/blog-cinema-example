<x-layout-main>
  <x-nav />
  <div class="container">
    <h1 class="text-center text-white ">Movie</h1>
    <div class="row mt-5 ">
      <div class="col-4">
        <img src="{{ Storage::url($films->img) }}" alt="" class="w-75  rounded-4 ">
        <p class="text-white fs-5 text-start mt-4">Titolo : <span class="fw-bold ">{{ $films->title }}</span></p>
        <p class="text-white fs-5 text-start ">Genere : <span class="fw-bold ">{{ $films->category }}</span></p>
      </div>
      <div class="col-8  py-2  ">
        <h3 class="text-white">Trama</h3>
        <p class="text-white fs-5 ">{{ $films->trama }}</p>
        <a href="{{ route('movies') }}" class="btn bg-white rounded-5 logIn mt-3">Torna indietro</a>
      </div>
    </div>

  </div>
</x-layout-main>