<x-layout-main title="I miei Articoli">
  <x-nav />

  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="col-6">
        <h1 class="text-white ">I miei Articoli</h1>
      </div>
      <div class="col-6 text-end">
        <a href="{{ route('articles.create') }}" class="btn btn-outline-danger rounded-5  d-flex d-inline-flex  align-items-center">
          <span><i class="bi bi-plus-circle-fill me-2 fs-5"></i></span>Inserisci Articolo</a>
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
          <th>Autore</th>
          <th>Titolo</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="">
        @foreach($articles as $article)
        <tr>
          <th>{{ $article->id }}</th>
          <th>{{ $article->user->email }}</th>
          <th><a href="{{ route('article.view', $article->id ) }}" class="text-decoration-none text-white">{{ $article->title }}</a></th>
          <th class="text-end">
            <a href="{{ route('articles.edit', $article->id ) }}" class="btn btn-primary rounded-5  ">Modifica</a>
            <form action="{{ route('articles.delete', $article->id ) }}" method="POST" class="d-inline ms-2">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger rounded-5" type="submit">Elimina</button>
            </form>
          </th>
        </tr>
        @endforeach
      </tbody>

    </table>






  </div>

</x-layout-main>