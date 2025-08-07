@include('layout.html-header')
@section('title',$user->name)
<body>
    @include('layout.nav')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.left-sidebar')
            </div>
            <div class="col-6">
                @include('shared.success-message')
                <div class="mt-3">
                    @include('shared.user-show-card')
                    <hr>

                    @forelse ($ideas as $idea)
                        <div class="mt-3">
                            @include('shared.idea-card')
                        </div>
                    @empty
                        <p class="text-center mt-4"> No results found</p>
                    @endforelse

                    <div class="mt-3">{{$ideas->withQueryString()->links()}}</div>
                </div>
            </div>
            <div class="col-3">
                @include('shared.search-bar')

                @include('shared.follow-box')
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                crossorigin="anonymous">
                </script>
</body>

</html>
