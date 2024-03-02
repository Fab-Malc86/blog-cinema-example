<x-layout-main>
  <x-nav />
  <div class="container w-50 ">

    <div class="row mt-5 ">
      <div class="col-12">

        <h2 class="text-white text-center ">Inserisci un nuovo Film</h2>


      </div>
    </div>


    <form action="{{route('movie.store')}}" method="post" class="mt-3 " enctype="multipart/form-data">
      @csrf

      <div class="row g-3">
        <div class="col-12">
          <label for="title" class="text-white ps-3 mb-1  ">Titolo</label>
          <input type="text" name="title" id="title" class="form-control rounded-5 @error('title') is-invalid @enderror" value="{{ old('title') }}">
          @error('title') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror
        </div>

        <div class="col-12">
          <label for="category" class="text-white ps-3 mb-1">Categoria</label>
          <input type="text" name="category" id="category" class="form-control rounded-5 @error('category') is-invalid @enderror" value="{{ old('category') }}">
          @error('category') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror
        </div>


        <div class="col-12">
          <label for="trama" class="text-white ps-3 mb-1">Trama</label>
          <textarea name="trama" id="trama" rows="10" class="rounded-5 p-3 w-100 @error('trama') is-invalid @enderror">{{ old('trama') }}</textarea>
          @error('trama') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror
        </div>

        <div class="col-12">
          <label for="image" class="text-white ps-3 mb-1">Immagine</label>
          <input type="file" name="image" id="image" class="form-control rounded-5">
          @error('image') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror
        </div>


        <div class="col-12">
          <button class="btn btn-primary rounded-5">Salva</button>
        </div>


      </div>
    </form>



  </div>
</x-layout-main>