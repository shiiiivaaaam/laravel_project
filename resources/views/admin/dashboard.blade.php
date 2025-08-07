@include('layout.html-header')

<body>
    @include('layout.nav')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('admin.shared.left-sidebar')
            </div>
            <div class="col-9">
                <h2>Admin Panel</h2>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        @include('admin.shared.widget',[
                        'icon'=>'fas fa-users',
                        'title'=>'Total Users',
                        'total'=>$totalusers,
                        ])
                    </div>
                    <div class="col-sm-6 col-md-4">
                         @include('admin.shared.widget',[
                        'icon'=>'fas fa-lightbulb',
                        'title'=>'Total Ideas',
                        'total'=>$totalideas,
                        ])
                    </div>
                    <div class="col-sm-6 col-md-4">
                         @include('admin.shared.widget',[
                        'icon'=>'fas fa-comment',
                        'title'=>'Total Comment',
                        'total'=>$totalcomments,
                        ])
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
