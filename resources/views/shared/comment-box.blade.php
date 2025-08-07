<div>
    <form action="{{route("ideas.comment.store",$idea->id)}}" method="post">
        @csrf
    <div class="mb-3">
        <textarea name="comment" class="fs-6 form-control" rows="1"></textarea>
        {{-- @error('comment')
                <span class="d-block fs-6 text-danger">{{$message}}</span>
        @enderror --}}
    </div>
    <div>
        <button type ="submit"class="btn btn-primary btn-sm"> Post Comment </button>
    </div>
</form>
    <hr>
    @forelse ($idea->comments as $comment )

    <div class="d-flex align-items-start">
        <img style="width:35px" class="me-2 avatar-sm rounded-circle"
            src="{{$comment->user->getImageUrl()}}" alt="Luigi Avatar">
        <div class="w-100">
            <div class="d-flex justify-content-between">
                <a href="{{route("users.show",$comment->user->id)}}" class="herf"><h6 class="">{{$comment->user->name}}</h6></a>
                <small class="fs-6 fw-light text-muted"> {{$comment->created_at}}</small>
            </div>
            <p class="fs-6 mt-3 fw-light">
                {{$comment->comment}}
            </p>
        </div>
    </div>
    @empty
        <p class="text-center mt-4">No Comments Found</p>
    @endforelse
</div>

