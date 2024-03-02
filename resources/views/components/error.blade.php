@if(session()->has('error'))
<div class="alert alert-danger m-0 d-inline rounded-5 px-3 py-2 ">
    {{ session('error') }}
</div>
@endif