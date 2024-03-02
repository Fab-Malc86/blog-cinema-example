@foreach($articles as $article)
<div class="row  mb-3 reveal" style="height:250px">
    <div class="col-5 d-flex align-items-center ">
        <img src="{{Storage::url($article->img) }}" alt="" class="img-fluid rounded-4">
    </div>

    <div class="col-7 pt-4">
        <div class="row h-100">
            <div class="col-12">
                <h4 class="text-white">{{ $article->title }}</h4>
                <p class="text-white">{{ $article->description }}</p>
            </div>
            <div class="col-12">
                <a href="{{ route('article.view', $article->id) }}" class="btn btn-outline-danger  d-inline-block   rounded-5 px-3">Continua a leggere</a>
            </div>
        </div>

    </div>
</div>
@endforeach