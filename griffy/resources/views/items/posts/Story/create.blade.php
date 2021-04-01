@extends('griffytheme.master')

@section('content')
<div class="card mx-auto" style="width: 50%; max-height: 70%;" >
    <div class="card-body ">
      <h4 class="card-title" style="text-align: center">Make Story</h4>
      

      <form class="forms-sample" style="margin-top: 50px" role="form" action="/story" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Story Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
      
        <div class="form-group">
          <label for="body">Write your story!</label>
          <textarea class="form-control" id="body" name="body" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-secondary">Cancel</button>
      
      </form>
    </div>
  </div>
@endsection