@extends('griffytheme.master')

@section('content')
    <div class="mx-auto w-50 mh-70">
      
        @forelse ( $sorted as $key =>$story )
         <div class="card mw-100" >
            <div class="card-body ">
              <h5 class="card-title text-center" style="font-size: 30px">{{$story -> title}}</h5>
              <span class="d-flex align-items-center border-bottom border-top border-info">
                <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/RealPeople/Rick.jpg') }}" alt="">
                <h5 class="text-center mx-3 my-4" style="color: #5a4ae3"  >{{$story->userName}}</h5>
              </span>
              
              
              <p class="card-text my-5">{{$story -> body}}</p>
              <div cla>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary w-2 h-2 px-3 py-2"><div class="mdi mdi-thumb-up"></div>Like</button>
                    <div class="d-flex align-items-center align-self-start my-1">
                      <h3 class="ml-5">{{$story->likeCount}}</h3>
                      <p class="text-success ml-2 mb-0 font-weight-medium">Likes</p>
                    </div>
                   
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