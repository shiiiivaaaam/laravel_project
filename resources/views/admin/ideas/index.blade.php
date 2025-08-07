@include('layout.html-header')

<body>
    @include('layout.nav')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('admin.shared.left-sidebar')
            </div>
            <div class="col-9">
                <h2>Ideas</h2>
                <table class='table table-striped'>
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Content</th>
                            <th>Created At</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ideas as $idea)
                        <tr>
                            <td>{{$idea->id}}</td>
                            <td>{{$idea->user->name}}</td>
                            <td>{{$idea->content}}</td>
                            <td>{{$idea->created_at->toDateString()}}</td>
                            <td>
                                <a href="{{route("ideas.show",$idea->id)}}">View</a>
                                <a href="{{route("ideas.edit",$idea->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$ideas->links()}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
