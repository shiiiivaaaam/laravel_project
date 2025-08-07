@extends('layout.layout')

@section("content")
<div class="container py-4">
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <div class="mt-3">
            <h2>Terms</h2>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore reprehenderit et perspiciatis illo
                cupiditate,
                recusandae quod id, officiis veniam dolore enim alias, excepturi nostrum. Necessitatibus odit quasi tenetur,
                debitis
                veniam reiciendis explicabo repudiandae pariatur corrupti. Neque ipsam delectus consequuntur ab dolorem
                ipsum.
                Consequuntur, reiciendis explicabo!
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')

            @include('shared.follow-box')
        </div>
    </div>
</div>

@endsection
