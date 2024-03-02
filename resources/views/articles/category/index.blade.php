<x-layout-main title="Categorie">
  <x-nav />

  <div class="container mt-4">
    <div class="row align-items-center justify-content-center ">
      <div class="col-md-3">
        <h1 class="text-white ">Categorie</h1>
      </div>
      <div class="col-md-3 d-flex justify-content-end p-2">
        <a href="{{ route('categories.create') }}" class="btn btn-primary text-end">Crea</a>
      </div>
    </div>

    <div class="row mt-2 align-items-center justify-content-center">
      <div class="col-6 m-auto">
        <x-success />
      </div>
    </div>

    <div class="row mt-2 align-items-center justify-content-center">
      <div class="col-6 m-auto">
        <x-error />
      </div>
    </div>


    <div class="col-md-6 m-auto ">
      <table class="mt-3 table table-bordered table-dark table-hover  ">
        <thead>
          <tr>
            <th class="fw-light">#</th>
            <th class="fw-light">Titolo</th>
            <th class="fw-light">Articoli</th>
            <th class="fw-light">User</th>
            <th class="fw-light"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <th class="fw-light">{{ $category->id }}</th>
            <th><a href="{{ route('categories.edit', $category->id) }}" class="text-decoration-none text-light ">{{ $category->name }}</a></th>
            <th>
              <ul>
                @foreach($category->articles as $article)
                <li>{{ $article->title }}</li>
                @endforeach
              </ul>
            </th>
            <th>
              <ul>
                @foreach($category->articles as $article)
                <li>{{ $article->user->email }}</li>
                @endforeach
              </ul>

            </th>
            <th class="text-end">
              <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="m-0">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm rounded-5">Elimina</button>
              </form>
            </th>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>







  </div>

</x-layout-main>