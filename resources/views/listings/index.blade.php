@extends('layout')

@section('content')
@include('partials._search')

    @unless(count($listings)== 0)
    <div class="row row-cols-1 row-cols-lg-4">
        @foreach($listings as $listing)
        <div class="col g-2">
            <div class="card h-100">
                <img class="card-img-top mx-auto d-block w-50" src="{{asset('images/laravel.png')}}" alt="Card image cap">
                <div class="card-body">
                    
                    <a href ="/listings/{{$listing['id']}}">
                        <h5 class="card-title">{{$listing['title']}}</h5>
                    </a>
                    <a href ="">
                        <h6 class="card-subtitle mb-2 text-muted">{{$listing['company']}}</h6>
                    </a>
                    <h6 class="card-subtitle mb-2 text-muted">{{$listing['location']}}</h6>
                </div>
                <div class="card-footer text-muted">
                    <x-listing-tags :tagsCsv="$listing->tags" />
                </div>
            </div>
        </div> 
        @endforeach 
    </div><br>
    @else
    <p>No listings found</p>
    @endunless

@endsection