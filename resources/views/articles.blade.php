<x-layout-main :title=$title>
  <x-nav />
  <div class="container p-4 position-relative ">
    <h2 class="text-center text-white ">ARTICOLI</h2>

    @foreach($articles as $id => $article)
    <div class="row my-5 border-bottom pb-5">
      <div class="col-4  text-center d-flex align-items-center ">
        <img src="{{Storage::url($article->img) }}" class="card-img-top rounded-4 " alt="...">
      </div>
      <div class="col-8 d-flex flex-column justify-content-center  position-relative p-2 pb-4">
        <p class="text-white fs-3 mb-2">{{ $article->title }}</p>
        <p class="text-white pb-3 fs-5">{{ $article->description }}</p>
        <a href="{{ route('article.view', $article->id) }}" class="btn btn-danger rounded-5 position-absolute bottom-0  end-0 ">Vai all'articolo</a>
      </div>
    </div>
    @endforeach

  </div>
</x-layout-main>