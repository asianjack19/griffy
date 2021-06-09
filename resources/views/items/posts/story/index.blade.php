@extends('griffytheme.master')

@section('content')
    <div class="mx-auto w-50 mh-70">
      
        @forelse ( $sorted as $key =>$story )
         <div class="card mw-100" style="border-radius: 12px" >
            <div class="card-body ">
              <h5 class="card-title text-center" style="font-size: 30px">{{$story ->title}}</h5>
              <span class="d-flex align-items-center  rounded-pill " style="background-color: #2a3038; align-items: center">
                <img class="img-xs rounded-circle " style="margin-left: 10px" src="{{ asset('assets/images/faces/RealPeople/Rick.jpg') }}" alt="">
                <h5 class="text-center mx-3 my-4" style="color: #5a4ae3"  >{{$story->userName}}</h5>
                <div class="mt-3" style="text-align: center;margin:auto; display: grid; grid-template-columns: repeat(2, 1fr); align-items: center">
                  <p>{{$story->majorName}}<br>in<br>{{$story->universityName}}</p>
                  @if ($story->studyStatus == "Active Student")
                    <p style="margin-left:0.5rem !important; font-size: 15px">Status: <span class="text-success ml-1">{{$story->studyStatus}}</span></p>
                  @else
                    <p style="margin-left:0.75rem !important; font-size: 15px">Status:<span class="text-danger ml-1"> {{$story->studyStatus}}</span></p>
                  @endif
                </div>
              </span>
              
              
              <p class="card-text my-5">{{$story -> body}}</p>
              <div cla>
                <div class="d-flex justify-content-between">
                  <a href="/story/{{$story->postID}}/react"><button class="btn btn-primary w-2 h-2 px-3 py-2" style="border-radius: 12px"><div class="mdi mdi-tag-faces"></div>React<br>to Post</button></a>
                    <div class="d-flex align-items-center align-self-start my-1">
                      {{-- <h3 class="ml-5">{{count($sorted->userID)}}</h3>
                      <p class="text-success ml-2 mb-0 font-weight-medium">Likes</p> --}}
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