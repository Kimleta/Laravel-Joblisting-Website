@extends('layout')

@section('content')
    
    <h1 class="text-center">{{$heading}}</h1>

    @unless(count($listings)== 0)
    <div class="row row-cols-1 row-cols-md-4">
        @foreach($listings as $listing)
        <div class="col g-2">
            <div class="card h-100">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    
                    <a href ="/listings/{{$listing['id']}}">
                        <h5 class="card-title">{{$listing['title']}}</h5>
                    </a>
                    <p class="card-text">{{$listing['description']}}</p>
                </div>
            </div>
        </div>       
        @endforeach 
    </div><br>
    @else
    <p>No listings found</p>
    @endunless

@endsection