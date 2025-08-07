<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form enctype="multipart/form-data" action="{{route('users.update',$user->id)}}" method='post'>
        @csrf
        @method('put')
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                    src="{{$user->getImageUrl()}}" alt="{{$user->name}}">
                <div>

                    <input type="text" name ="name"value="{{$user->name}}" class="form-control">

                </div>
            </div>
            <div>

                <a href="{{route('users.show', $user->id )}}" class="href">View</a>

            </div>
        </div>
        <div class="mt-4">
            <label for="image">Profile Picture</label>
            <input type="file" class="form-control" name='image'>
            @error('image')
                <span class="d-block fs-6 text-red-700">{{$message}}</span>
            @enderror
        </div>
        <div class="px-2 mt-4">
            <h5 class="fs-5"> Bio : </h5>
            <div class="mb-3">
                <textarea name="bio" id="bio" rows="3" class="form-control" >{{$user->bio}}</textarea>
            </div>
            @error('bio')
                <span class="d-block fs-6 text-red-700">{{$message}}</span>
            @enderror
            <button type="submit" class="btn btn-dark btn-sm mx-2 my-2">Save</button>

            <div class="d-flex justify-content-start">
                <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                    </span> 0 Followers </a>
                <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                    </span> {{$user->ideas()->count()}}</a>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                    </span> {{$user->comments()->count()}} </a>
            </div>
            @auth
                @if(auth()->id() != $user->id)
                    <div class="mt-3">
                        <button class="btn btn-primary btn-sm"> Follow </button>
                    </div>
                @endif
            @endauth

        </div>
        </form>
    </div>
</div>
<hr>
