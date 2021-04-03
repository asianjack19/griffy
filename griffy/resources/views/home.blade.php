@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between">
                        <p class="my-3">You are logged in!</p>
                        <a class="mx-5 my-3" href="/story">
                            <button type="button" class="btn btn-dark " style="color: #007bff;" >Let's Go!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
