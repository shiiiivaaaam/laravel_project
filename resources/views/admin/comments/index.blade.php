@include('layout.html-header')

<body>
    @include('layout.nav')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('admin.shared.left-sidebar')
            </div>
            <div class="col-9">
                @include('shared.success-message')
                <h2>Comments</h2>
                <table class='table table-striped'>
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Idea</th>
                            <th>Content</th>
                            <th>Created At</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{$comment->id}}</td>

                            <td><a href="{{route("users.show",$comment->user)}}">{{$comment->user->name}}</a></td>
                            <td><a href="{{route("ideas.show",$comment->idea)}}">{{$comment->idea->id}}</a></td>

                            <td>{{$comment->comment}}</td>
                            <td>{{$comment->created_at->toDateString()}}</td>
                            <td>
                                <form action="{{route('admin.comments.destroy',$comment)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type='submit' class="btn btn-danger btn-sm">X</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$comments->links()}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
