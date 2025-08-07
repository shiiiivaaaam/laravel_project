@include('layout.html-header')

<body>
    @include('layout.nav')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('admin.shared.left-sidebar')
            </div>
            <div class="col-9">
                <h2>Users</h2>
                <table class='table table-striped'>
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Joined At</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->created_at->toDateString()}}</td>
                            <td>
                                <a href="{{route("users.show",$user->id)}}">View</a>
                                <a href="{{route("users.edit",$user->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
