<x-layout-main :title=$title>
  <x-nav-home class="modalZindex" />
  <x-carousel :name=$name :surname=$surname :articles=$articles />

  <section class="container mt-5 pt-5">

    <div class="row mt-5">

      <div class="col-8 pe-5 pb-5">
        <h3 class="text-white mb-3">Articoli</h3>
        <x-home-article :articles=$articles />
      </div>

      <div class="col-4  ps-5 border-start">
        <h3 class="text-white mb-3">Movie</h3>
        <x-home-movie :movies=$movies />
      </div>

    </div>

  </section>
</x-layout-main>