<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Place</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- font awesome library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/placePage.css')}}">
</head>
<body>
    <div class="container">
        <div class="hero">
            <img src="{{asset('img/cafeImg.jpeg')}}" class="hero-banner" alt="Image">
        </div>

        <div class="container-fluid">
            <div class="place-name-container">
                <div class="d-flex justify-content-between align-items-center place-name-container-top">
                    <div class="name-rating">
                        <h3>Place Name</h3>
                        <div class="rates">
                            <span class="star-rating">4.5</span>
                            <div class="stars">
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="place-details">
                        <div class="save-button-box">
                            <button type="button" class="btn save-button">Save
                                <i class="far fa-bookmark fa-lg bookmark-icon" style="color: black;"></i>
                            </button>
                        </div>
                        <button type="button" class="btn like-button">
                            <i class="far fa-heart fa-lg"></i>   
                        </button>
                        <button type="button" class="btn share-button">
                            <i class="far fa-paper-plane fa-lg" style="color: black;"></i>
                        </button>
                    </div>
                </div>
                <p>Place Address</p>
            </div>

            <div class="place-description">
                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore voluptatibus, aliquid ratione delectus natus assumenda, sed fugiat distinctio dolore sit aperiam atque animi accusamus, omnis ipsum commodi. Esse, sapiente a!</p>
            </div>
        </div>

        <div class="container review-container">
            <div class="review-head">
                <h5>Review</h5>
                <div class="sort-drop">
                    <div class="btn-group">
                        <button class="btn btn-sm dropdown-toggle sort-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Sort
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Newest</a></li>
                            <li><a class="dropdown-item" href="#">Oldest</a></li>
                            <li><a class="dropdown-item" href="#">Highest Rating</a></li>
                            <li><a class="dropdown-item" href="#">Lowest Rating</a></li>
                        </ul>
                      </div>
                </div>
                <div class="add-review-button">
                    <button type="button" class="btn addReview-button">
                        + Add Review
                    </button>
                </div>
            </div>
            
            <div class="reviews">
                <div class="review-box">
                    <div class="rev-user">
                        <img src="{{asset('img/cardImage.png')}}" alt="">
                        <div class="rev-name-rate">
                            <p>User name</p>
                            <p>bintang</p>
                        </div>
                    </div>
                    <div class="rev-content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi quidem ab fuga laborum illum quas esse magni, ut officiis culpa modi error quisquam placeat iure, est magnam vero aperiam dicta?</p>
                    </div>
                </div>
                <hr>    
            </div>
            
            <div class="d-flex justify-content-center">
                <button type="button" class="btn border border-warning border-2 rounded-pill text-primary">
                    More reviews
                </button>
            </div>

        </div>
    </div>

    <div class="container">
        <h2>More Places</h2>
        <div class="row card-row">
            <div class="col card-col">
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
            </div>
            <div class="col card-col">
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
            <div class="col card-col">
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
            </div>
        </div>


        {{-- <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Reviews</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="sortingDropdown" data-bs-toggle="dropdown">
                            Sort By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortingDropdown">
                            <li><a class="dropdown-item" href="#">Newest</a></li>
                            <li><a class="dropdown-item" href="#">Oldest</a></li>
                            <li><a class="dropdown-item" href="#">Highest Rating</a></li>
                            <li><a class="dropdown-item" href="#">Lowest Rating</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary ms-2">Add Review</a>
                </div>
            </div>

            <div class="row mt-4">
                @foreach ($reviews as $review)
                <div class="col-md-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="User Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $review['user_name'] }}</h5>
                            <h5 class="card-title">Test</h5>
                            <div class="rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $review['rating'])
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </div>
                            <p class="card-text">{{ $review['review_text'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            <div class="row align-items-center">
                <div class="col">
                    <h2 class="d-inline">Reviews</h2>
                    {{-- <div class="dropdown d-inline">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="sortingDropdown" data-bs-toggle="dropdown">
                            Sort By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortingDropdown">
                            <li><a class="dropdown-item" href="#">Newest</a></li>
                            <li><a class="dropdown-item" href="#">Oldest</a></li>
                            <li><a class="dropdown-item" href="#">Highest Rating</a></li>
                            <li><a class="dropdown-item" href="#">Lowest Rating</a></li>
                        </ul>
                    </div>
                    <div class="dropdown d-inline">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                          Sort By
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Newest</a></li>
                          <li><a class="dropdown-item" href="#">Oldest</a></li>
                          <li><a class="dropdown-item" href="#">Highest Rating</a></li>
                          <li><a class="dropdown-item" href="#">Lowest Rating</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-auto">
                    <a href="#" class="btn btn-primary">Add Review</a>
                </div>
            </div>
        
            </div>
        </div> --}}
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>