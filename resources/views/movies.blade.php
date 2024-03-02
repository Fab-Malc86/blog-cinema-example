<x-layout-main :title=$title>
  <x-nav />
  <div class="container text-center p-4 position-relative ">
    <h2 class="text-white">MOVIES</h2>



    <div class="row mt-5  g-md-4 g-lg-5 ">

      @foreach($filmsStore as $id => $filmS)
      <div class=" col-md-4 col-xl-3 d-flex justify-content-center ">
        @if($filmS->visible)
        <x-card :id="$filmS->id" :title="$filmS->title" :category="$filmS->category" :description="$filmS->description" :img="$filmS->img" :root="route('movie',$filmS->id)" />
        @endif
      </div>
      @endforeach

    </div>

  </div>


</x-layout-main>