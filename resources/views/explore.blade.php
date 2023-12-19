@extends('layouts.main')

<title>Explore</title>

<link rel="stylesheet" href="{{asset('css/explore.css')}}">

@section('content')
    <div class="container mb-3" style="margin-top: 20px; padding: 0 29px">
        <h1 style="font-weight:bold">Explore</h1> 
        <div class="row card-row">
            @foreach ($places as $item)
                <?php $slug = Str::slug($item->name); ?>
                <div class="col-lg-4 card-col mb-3">
                    <a href="{{route('detail', ['id'=>$item->id, 'slug'=>$slug])}}" class="card-link text-decoration-none">
                        <div class="card">
                            <img src="{{asset('img/' . $item->img)}}" class="card-img object-fit-cover" alt="Image">
                            {{-- <div class="circle-bg">
                                <a aria-label ="Save" href=""><i class="far fa-bookmark fa-lg bookmark-icon"></i></a>
                            </div> --}}
                            <div class="card-body">
                                <div class="row body-row">
                                    <div class="col body-col">
                                        <h5 class="card-title custom-title">{{$item->name}}</h5>
                                    </div>
                                    <div class="col-auto">
                                        <span class="ml-1">{{round($item->avgRating(), 2)}}</span>
                                        <i class="far fa-star"></i>
                                        {{-- <i class="far fa-heart"></i>  --}}
                                    </div>
                                </div>
                                <p class="card-text">{{$item->address}}</p>
                                <h6 class="card-text category-text">{{$item->placeCategory->name}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <br>
            @endforeach
        </div>            
    </div>
@endsection