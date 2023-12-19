@extends('layouts.main')

<title>Bi.Guide | Categories </title>

<link rel="stylesheet" href="{{ asset('css/category-style.css') }}">

@section('content')
    <body class="wrapper">
   

    <link rel="stylesheet" href="{{ asset('css/category-style.css') }}">
    <h3 style="font-size: 40px; color: blue; font-weight: bold; text-shadow: 0px 2px 4px #D3D3D3;margin: 41px 129px 0 129px;">Categories</h3>

    <br>
    <div class="container category-container">
        @foreach($categories as $category)
        <div class="row category-row">
            <h5>{{ $category->name }}</h5>
        </div>
        @endforeach
    </div>
    <br>
    <br>

    <!-- Card Section -->
    @foreach($categories as $category)
        <h3 style="font-weight: bold; margin: 21px 129px 20px 129px;">Explore
            @if ($category && $category->name)
            <span style="color: orangered; font-weight: bold;">{{ $category->name }}</span>
            @endif
        </h3>

        <div class="kumpulan-card">
            <div class="row">
                @if ($category && $category->places->isNotEmpty())
                    @foreach($category->places as $index => $place)
                        @if($index % 3 == 0 && $index != 0)
                            </div><div class="row">
                        @endif
                        <div class="col-md-4">
                            <a href="{{ route('detail', ['id' => $place->id]) }}" class="card-link text-decoration-none">
                                <div class="card mt-4">
                                    <img src="{{asset('img/' . $place->img)}}" class="card-img" alt="Image">
                                    {{-- <div class="circle-bg">
                                        <i class="far fa-bookmark fa-lg bookmark-icon"></i>
                                    </div> --}}
                                    <div class="card-body">
                                        <div class="row body-row">
                                            <div class="col body-col">
                                                <h5 class="card-title custom-title">{{$place->name}}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <span class="ml-1">{{round($place->avgRating(), 2)}}</span>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="card-text">{{ $place->address }}</p>
                                        <h6 class="card-text category-text">
                                            {{$category->name}}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No places for this category yet :(</p>
                @endif
            </div>
        </div>
    @endforeach

    {{-- <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-outline-primary font-weight-bold">View All</button>
    </div> --}}

    <br>
    <br>

@endsection

