@include('shared.success-message')
@auth()
<h4> Share yours ideas </h4>
<form action="{{route('ideas.create')}}" method="post">
<div class="row">

        @csrf
        <div class="mb-3">
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
            @error('content')
               <span class="d-block fs-6 text-red-700">{{$message}}</span>
            @enderror
        </div>
        <div class="">
            <button type ="submit"class="btn btn-dark"> Share </button>
        </div>
</div>
</form>
@endauth
@guest
   <h4>{{__('ideas.login_to_share')}}</h4>
   {{-- <h7>Language:{{ app()->getLocale() }}</h7> --}}
@endguest

