@extends('griffytheme.master')

@section('content')
    <div class="mx-auto w-50 mh-70">
      
        @forelse ( $reactionList as $key =>$reaction )
         <div class="card mw-100" style="border-radius: 12px; margin: 1rem" >
            <div class="card-body ">
              <h5 class="card-title text-center">{{$reaction ->reactionBody}}</h5>
              <span class="d-flex align-items-center  rounded-pill " style="background-color: #2a3038; align-items: center">
                <img class="img-xs rounded-circle " style="margin-left: 10px" src="{{ asset('assets/images/faces/RealPeople/Rick.jpg') }}" alt="">
                <h5 class="text-center mx-3 my-4" style="color: #5a4ae3"  >{{$reaction->reactionType}}</h5>
                <div class="mt-3" style="text-align: center;margin:auto; display: grid; grid-template-columns: repeat(2, 1fr); align-items: center">
         
            </div>
          </div>
          @empty
            <div class="align-middle my-2">
                <h5 class="card-title text-center" style="font-size: 30px">No Reactions!</h5>
                <h5 class="card-title text-center" style="font-size: 10px">(yet)<h1 class="text-center">&#x1F610;</h1></h5>
            </div>
       
        @endforelse
        
        
    </div>
@endsection