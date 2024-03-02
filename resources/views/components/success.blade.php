@if(session()->has('success'))
<div class="alert alert-success m-0 d-inline rounded-5 px-3 py-2 ">
    {{ session('success') }}
</div>
@endif