@extends('griffytheme.master')

@section('content')
    <div class="mx-auto w-50 mh-70">
        @forelse ( $story as $key =>$story )
         <div class="card mw-100" >
            <div class="card-body">
              <h5 class="card-title text-center" style="font-size: 30px">{{$story -> title}}</h5>
              <p class="card-text">{{$story -> body}}</p>
              <div>
                <div class="d-flex align-items-center align-self-start">
                    <button class="btn btn-primary"><div class="mdi mdi-thumb-up"></div>Like</button>
                    <h3 class="ml-5">{{$story->likeCount}}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium">Likes</p>
                  </div>
              </div>
            </div>
          </div>
            @empty
            <div class="align-middle my-2">
                <h5 class="card-title text-center" style="font-size: 30px">No Stories!</h5>
                <h5 class="card-title text-center" style="font-size: 10px">(yet)<h1 class="text-center">&#x1F610;</h1></h5>
            </div>
            
        @endforelse
        
        
    </div>
@endsection