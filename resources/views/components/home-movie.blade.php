@foreach($movies as $movie)
<div class="row overflow-hidden mb-3 reveal" style="height:250px">
    <div class="col-5 d-flex align-items-center ">
        <img src="{{Storage::url($movie->img) }}" alt="" class="img-fluid rounded-4">
    </div>

    <div class="col-7 pt-4  ">
        <div class="row  h-100">
            <div class="col-12">
                <h4 class="text-white">{{ $movie->title }}</h4>
                <p class="text-white">{{ $movie->category }}</p>
            </div>

            <div class="col-12 d-flex align-items-center">
                <a href="{{ route('movie', $movie->id) }}" class="btn btn-outline-danger  d-inline-block   rounded-5 px-3">Vai al film</a>
            </div>
        </div>

    </div>
</div>
@endforeach