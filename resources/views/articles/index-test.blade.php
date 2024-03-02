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


    <table class="mt-3 table table-bordered table-dark table-hover  ">
      <thead>
        <tr>
          <th>#</th>
          <th>Titolo</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="">
        @foreach($articles as $article)
        <tr>
          <th>{{ $article->id }}</th>
          <th><a href="">{{ $article->title }}</a></th>
          <th></th>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{--<div class="text-white">{{ $articles->links() }}
  </div>--}}





  </div>

</x-layout-main>