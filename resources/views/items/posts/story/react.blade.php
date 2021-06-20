@extends('griffytheme.master')

@section('content')
<div class="card mx-auto w-50 mh-70" style="border-radius: 12px">
    <div class="card-body ">
      <h4 class="card-title text-center">React to Story by</h4>
      <h4 class="text-center mx-3 my-4" style="color: #5a4ae3" >{{$story->userName}}</h5>
      <h5 class="card-title text-center">From</h4>
        <div class="mt-3" style="text-align: center;margin:auto;">
            <p>{{$story->universityName}}</p>
          </div>

      <form class="forms-sample" style="margin-top: 50px" role="form" action="/story/{id}/react" method="POST">
        @csrf
        <div class="form-group">
          <label for="reactionBody">Tell us your Reaction!</label>
          <textarea class="form-control" id="reactionBody" name="reactionBody" rows="4" style="border-radius: 12px"></textarea>          
          @error('reactionBody')
            <div class="alert alert-warning">
              {{$message}}
            </div>
          @enderror

        </div>
      
        <div class="form-group">
          <label for="reactionType">What do you think?</label>
            <select class="form-control @error('reactionType') is-invalid @enderror" name="reactionType"  }} id="reactionType">
                <option>Nice &#128513; &#128077;</option>
                <option>Bad &#128545; &#128078;</option>
              </select>
            @error('raeactionType')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type = "hidden" name = "postID" value ={{$story->postID}}>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        
      </form>
      <div style="margin-top: 1rem">

        <a href="{{url()->previous()}}"><button class="btn btn-secondary">Cancel</button></a>
      </div>
    </div>
  </div>
@endsection