@if (session()->has('failed'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('failed')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

