@extends('layouts.main')

<title>Explore</title>

<link rel="stylesheet" href="{{asset('css/explore.css')}}">

@section('content')
    <div class="container" style="margin-top: 20px; padding: 0 29px">
        <h1>Explore</h1> 
        <div class="row card-row">
            @foreach ($places as $item)
                <?php $slug = Str::slug($item->name); ?>
                <div class="col-md-4 card-col">
                    <a href="{{route('detail', ['id'=>$item->id, 'slug'=>$slug])}}" class="card-link">
                        <div class="card">
                            <img src="{{$item->img}}" class="card-img" alt="Image">
                            <div class="circle-bg">
                                <a aria-label ="Save" href=""><i class="far fa-bookmark fa-lg bookmark-icon"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="row body-row">
                                    <div class="col body-col">
                                        <h5 class="card-title custom-title">{{$item->name}}</h5>
                                    </div>
                                    <div class="col-auto">
                                        <span class="ml-1">4</span>
                                        <i class="far fa-heart"></i> 
                                    </div>
                                </div>
                                <p class="card-text">{{$item->address}}</p>
                                <h6 class="card-text category-text">{{$item->placeCategory->name}}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            {{-- <div class="col-4 card-col">
                <a href="{{asset('place')}}" class="card-link">
                    <div class="card">
                        <img src="{{asset('img/cafeImg.jpeg')}}" class="card-img" alt="Image">
                        <div class="circle-bg">
                            <a aria-label ="Save" href=""><i class="far fa-bookmark fa-lg bookmark-icon"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row body-row">
                                <div class="col body-col">
                                    <h5 class="card-title custom-title">Card Title</h5>
                                </div>
                                <div class="col-auto">
                                    <span class="ml-1">4</span> <!-- Number of likes -->
                                    <i class="far fa-heart"></i> <!-- Like icon -->
                                </div>
                            </div>
                            <p class="card-text">Place addresses</p>
                            <h6 class="card-text category-text">Category</h6>
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="col-4 card-col">
                <div class="card">
                    <img src="{{asset('img/cardImage.png')}}" class="card-img" alt="Image">
                    <div class="circle-bg">
                        <i class="far fa-bookmark fa-lg bookmark-icon"></i>
                    </div>
                    <div class="card-body">
                        <div class="row body-row">
                            <div class="col body-col">
                                <h5 class="card-title custom-title">Card Title</h5>
                            </div>
                            <div class="col-auto">
                                <span class="ml-1">4</span> <!-- Number of likes -->
                                <i class="far fa-heart"></i> <!-- Like icon -->
                            </div>
                        </div>
                        <p class="card-text">Place addresses</p>
                        <h6 class="card-text category-text">Category</h6>
                    </div>
                </div>
            </div>
            <div class="col-4 card-col">
                <div class="card">
                    <img src="{{asset('img/cafeImg.jpeg')}}" class="card-img" alt="Image">
                    <div class="circle-bg">
                        <i class="far fa-bookmark fa-lg bookmark-icon"></i>
                    </div>
                    <div class="card-body">
                        <div class="row body-row">
                            <div class="col body-col">
                                <h5 class="card-title custom-title">Card Title</h5>
                            </div>
                            <div class="col-auto">
                                <span class="ml-1">4</span> <!-- Number of likes -->
                                <i class="far fa-heart"></i> <!-- Like icon -->
                            </div>
                        </div>
                        <p class="card-text">Place addresses</p>
                        <h6 class="card-text category-text">Category</h6>
                    </div>
                </div>
            </div> --}}
        </div>            
    </div>

    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
@endsection
