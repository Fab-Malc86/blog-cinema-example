<x-layout-main title="Categorie">
  <x-nav />

  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="col-md-6 m-auto  ">
        <h1 class="text-white text-center">Modifica una Categoria</h1>
      </div>
    </div>

    <div class="row mt-2 mb-2 align-items-center justify-content-center">
      <div class="col-6 m-auto">
        <x-success />
      </div>
    </div>

    <div class="col-md-6 m-auto ">
      <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3">
          <div class="col-12 position-relative ">
            <label for="name" class=" text-white mb-2">Nome</label>
            <a href="{{ route('categories.index') }}" class="position-absolute end-0 me-2 text-decoration-none text-primary ">&laquo; Indietro</a>
            <input type="text" name="name" id="name" class="form-control" maxlength="50" value="{{ old('name', $category->name ) }}">
            @error('name') <span class="text-danger small">{{ $message }}</span>@enderror
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary ">Modifica</button>
          </div>
        </div>
      </form>
    </div>





  </div>

</x-layout-main>