<div class="card bg-black border rounded-4 card-action card-static" style="width: 18rem">
    <img src="{{ Storage::url($img) }}" class="card-img-top rounded-4" alt="...">
    <div class="card-body">
        <h5 class="card-title text-white">{{$title}}</h5>
        <p class="card-text text-white fw-light ">Genere: {{$category}}</p>
        <a href="{{ $root }}" class="btn btn-danger rounded-5">Vai al Film</a>
    </div>
</div>