<x-layout-main title="I miei Film">
  <x-nav />

  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="col-6">
        <h1 class="text-white ">I miei Film</h1>
      </div>
      <div class="col-6 text-end">
        <a href="{{ route('movie.create') }}" class="btn btn-outline-danger rounded-5  d-flex d-inline-flex  align-items-center">
          <span><i class="bi bi-plus-circle-fill me-2 fs-5"></i></span>Inserisci Film</a>
      </div>
    </div>

    <div class="row mt-2 align-items-center justify-content-center">
      <div class="col-12">
        <x-success />
      </div>
    </div>


    <table class="mt-3 table table-bordered table-dark table-hover  ">
      <thead>
        <tr>
          <th>#</th>
          <th>Titolo</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="">
        @foreach($filmsStore as $film)
        <tr>
          <th>{{ $film->id }}</th>
          <th><a href="{{ route('movie', $film->id) }}" class="text-decoration-none text-white">{{ $film->title }}</a></th>
          <th class="text-end">
            <a href="{{ route('movie.edit', $film->id) }}" class="btn btn-primary rounded-5">Modifica</a>
            <form action="{{ route('movie.delete', $film->id) }}" method="POST" class="d-inline ms-2 ">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger rounded-5 ">Elimina</button>

            </form>
          </th>
        </tr>
        @endforeach
      </tbody>

    </table>






  </div>

</x-layout-main>