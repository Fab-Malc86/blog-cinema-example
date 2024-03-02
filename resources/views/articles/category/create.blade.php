<x-layout-main title="Categorie">
  <x-nav />

  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="col-md-6 m-auto  ">
        <h1 class="text-white text-center">Crea una Categoria</h1>
      </div>
    </div>

    <div class="col-md-6 m-auto ">
      <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="row g-3">
          <div class="col-12">
            <label for="name" class=" text-white mb-2">Nome</label>
            <input type="text" name="name" id="name" class="form-control" maxlength="50" value="{{ old('name') }}">
            @error('name') <span class="text-danger small">{{ $message }}</span>@enderror
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary ">Crea</button>
          </div>
        </div>
      </form>
    </div>





  </div>

</x-layout-main>