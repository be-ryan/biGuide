<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,400;9..40,500;9..40,700&display=swap" rel="stylesheet">

    {{-- bootstrap css--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    {{-- font awesome library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/explore.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    @include('partials.navbar')

    <div class="container" style="margin: 41px 129px 0 129px;">
        <h1 style="font-family: 'DM Sans', sans-serif;">Explore</h1> 
        <div class="row card-row" style="margin: 30px 100px 0 100px; padding-top:20px">
            @foreach ($places as $item)
                <div class="col-4 card-col" >
                    <a href="{{asset('place')}}" class="card-link">
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
                <br>
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
    <br>
    <br>

    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    <br>
    
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>