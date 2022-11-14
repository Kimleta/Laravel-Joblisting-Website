@extends('layout')

@section('content') 

    <div class="px-4 my-5 text-center bg">
        <img class="d-block mx-auto mb-4 w-25" src="{{asset('images/laravel.png')}}" alt="Card image cap">
        <h1 class="display-5 fw-bold">{{$listing['title']}}</h1><br>
        <x-listing-tags :tagsCsv="$listing->tags" />
    </div>
    <h4 class="display-7 fw-bold text-center">Description</h4><br>
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <p class="lead">{{$listing['description']}}</p>
      </div>  
    </div>
</div>
    

@endsection