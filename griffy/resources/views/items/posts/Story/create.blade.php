@extends('griffytheme.master')

@section('content')
<div class="card mx-auto w-50 mh-70" style="border-radius: 12px">
    <div class="card-body ">
      <h4 class="card-title text-center">Make Story</h4>
      

      <form class="forms-sample" style="margin-top: 50px" role="form" action="/story" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Story Title</label>
          <input type="text" class="form-control" id="title" name="title" style="border-radius: 12px">
          
          @error('title')
            <div class="alert alert-warning">
              {{$message}}
            </div>
          @enderror

        </div>
      
        <div class="form-group">
          <label for="body">Write your story!</label>
          <textarea class="form-control" id="body" name="body" rows="4" style="border-radius: 12px"></textarea>
          
          @error('body')
            <div class="alert alert-warning">
              {{$message}}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ route('home') }}"><button class="btn btn-secondary">Cancel</button></a>
      
      </form>
    </div>
  </div>
@endsection