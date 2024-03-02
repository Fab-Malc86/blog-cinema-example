<x-layout-main>
  <x-nav />

  <div class="container">

    <div class="row mt-5 ">
      <div class="col-12">

        <h2 class="text-white text-center ">Modifica Articolo</h2>


      </div>
    </div>



    <div class="row">
      <div class="col-md-6 m-auto ">
        <form action="{{route('articles.update', $article->id)}}" method="POST" class="mt-3 " enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row g-3">
            <div class="col-12">
              <label for="title" class="text-white ps-3 mb-1  ">Titolo</label>
              <input type="text" name="title" id="title" class="form-control rounded-5  @error('title') is-invalid @enderror" value="{{ old('title', $article->title) }}">
              @error('title') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">

              <label for="category_id" class="text-white ps-3 mb-1  ">Categoria</label>
              <select class="form-select rounded-5 @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" id="category">

                @foreach($categorys as $category)
                <option value="{{ old('category_id', $category->id ) }}">{{ $category->name}}</option>
                @endforeach
              </select>
              @error('category_id') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror

            </div>

            <div class="col-12">
              <label for="description" class="text-white ps-3 mb-1">Descrizione</label>
              <textarea name="description" id="description" rows="4" class="rounded-5 p-3 w-100 @error('description') is-invalid @enderror">{{ old('description', $article->description) }}</textarea>
              @error('description') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror

            </div>

            <div class="col-12">
              <label for="body" class="text-white ps-3 mb-1">Corpo</label>
              <textarea name="body" id="body" rows="10" class="rounded-5 p-3 w-100 @error('body') is-invalid @enderror">{{ old('body', $article->body) }}</textarea>
              @error('body') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">
              <label for="image" class="text-white ps-3 mb-1">Immagine</label>
              <input type="file" name="image" id="image" class="form-control rounded-5">
              @error('image') <span class="text-danger small ps-3 mt-2 d-inline-block  ">{{ $message }}</span> @enderror
            </div>

            <div class="col-12 d-flex justify-content-between  align-items-center  ">
              <div class="col-6">
                <button class="btn btn-primary rounded-5" type="submit">Salva</button>
              </div>
              <div class="col-6 d-flex justify-content-end  ">
                <x-success />
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>




  </div>
</x-layout-main>