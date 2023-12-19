@extends('layouts.main')

<title>Place | {{ $detail->name }}</title>

{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/placePage.css') }}">

@section('content')
    <div class="container" style="margin-top: 20px">
        <div class="hero">
            <img src="{{asset('img/' . $detail->img)}}" class="hero-banner" alt="Image">
        </div>

        <div class="container-fluid py-3">
            <div class="place-name-container">
                <div class="d-flex justify-content-between align-items-center place-name-container-top">
                    <div class="name-rating">
                        <h3>{{$detail->name}}</h3>
                        <div class="rates align-items-center">
                            <span class="star-rating">{{round($avgRating, 2)}}</span>
                            <div class="stars">
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="place-details">
                        {{-- <div class="save-button-box">
                            <button type="button" class="btn save-button">Save
                                <i class="far fa-bookmark fa-lg bookmark-icon" style="color: black;"></i>
                            </button>
                        </div> --}}
                        {{-- <button type="button" class="btn like-button">
                            <i class="far fa-heart fa-lg"></i>   
                        </button>
                        <button type="button" class="btn share-button">
                            <i class="far fa-paper-plane fa-lg" style="color: black;"></i>
                        </button> --}}
                    </div>
                </div>
                <p>{{$detail->address}}</p>
            </div>

            <div class="place-description">
                <h4>Description</h4>
                <p>{{$detail->description}}</p>
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
                    <button onclick="document.getElementById('reviewForm').style.display='block'" style="width:auto;" class="btn addReview-button" id="add-review-btn">
                        + Add Review
                    </button>
                    {{-- <button onclick="document.getElementById('reviewForm').style.display='block'" style="width:auto;"
                        class="btn addReview-button" id="add-review-btn">+ Add Review</button> --}}

                    {{-- Review Form Modal --}}
                    <div id="reviewForm" class="modal">
                        <span onclick="document.getElementById('reviewForm').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form action="{{ route('reviews.store', ['id' => $detail->id]) }}" method="post" class="modal-content p-3">
                        @csrf

                        <h2 class="text-center">Place Name</h2>
                        
                        <div class="rate pt-4 d-flex">
                            <label for="rating">Rating (between 1 and 5):</label>
                            <input type="number" id="rating" name="rating" min="1" max="5" style="margin-left: 10px; width: 50px; height: 25px;">
                        </div>
                        
                        <div class="text-box pt-4 mb-3">
                            <label for="review">Review:</label>
                            <textarea class="form-control" name="content" id="review" rows="7" placeholder="Write your review..."></textarea>
                        </div>
                        
                        <div class="reviewFormBtn pt-3 d-flex justify-content-end">
                            <button type="button" onclick="document.getElementById('reviewForm').style.display='none'" class="btn btn-danger mx-1">Cancel</button>
                            <button type="submit" class="btn btn-success mx-1">Submit</button>
                        </div>
                    </form>
                    </div>
 
                    <script>
                        var modal = document.getElementById('reviewForm');

                        window.onclick = function (event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                </div>
            </div>

            {{-- Your existing reviews section --}}
            <div class="reviews">
                @foreach($reviews as $review)
                    <div class="review-box">
                        <div class="rev-user">
                            <img src="{{asset('profileImg/' . $review->user->profileImg)}}" class="object-fit-cover" alt="">
                            <div class="rev-name-rate">
                                <p>{{$review->user->name}}</p>
                                <div class="d-flex align-items-center">
                                    <p>{{$review->rating}}&nbsp;</p>
                                    @for($i=0; $i < $review->rating; $i++)
                                       <i class="far fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="rev-content">
                            <p>{{$review->content}}</p>
                        </div>
                    </div>
                    <hr>    
                @endforeach
            </div>

            {{-- <div class="d-flex justify-content-center">
                <button type="button" class="btn border border-warning border-2 rounded-pill text-primary">
                    More reviews
                </button>
            </div> --}}
        </div>

        {{-- More Places Section --}}
        <div class="container">
            <h2>More Places</h2>
            <div class="row card-row">
                @foreach ($shuffledItems as $item)
                    <?php $slug = Str::slug($item->name); ?>
                    <div class="col-md-4 card-col mb-3">
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
                                        </div>
                                    </div>
                                    <p class="card-text">{{$item->address}}</p>
                                    <h6 class="card-text category-text">{{$item->placeCategory->name}}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @if($loop->iteration >= 3) @break @endif
                @endforeach
            
            </div>
        </div>
    </div>
@endsection
