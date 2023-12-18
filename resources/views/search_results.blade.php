<!-- In search-results.blade.php -->
@extends('layouts.main')
{{-- <link rel="stylesheet" href="{{ asset('css/category-style.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/result-style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
<title> Search Result</title>
@section('content')
    <div class="container" style="margin-top: 20px; padding: 0 29px">
        <br>

        <h1 style="font-weight:bold">Search Results for <span class = "animasiteks">"{{ $query }}"</span></h1>
        <div class="row card-row">
            @forelse ($results as $result)
                <?php $slug = Str::slug($result->name); ?>
                <div class="col-md-4">
                    <a href="{{ route('detail', ['id' => $result->id, 'slug' => $slug]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="{{ asset('img/' . $result->img) }}" class="card-img" alt="Image">

                            <div class="circle-bg">
                                <i class="far fa-bookmark fa-lg bookmark-icon"></i>
                            </div>
                            <div class="card-body">
                                <div class="row body-row">
                                    <div class="col body-col">
                                        <h5 class="card-title custom-title">{{ $result->name }}</h5>
                                    </div>
                                    <div class="col-auto">
                                        <span class="ml-1">{{ $result->likes }}</span>
                                        <i class="far fa-heart"></i>
                                    </div>
                                </div>
                                <p class="card-text">{{ $result->address }}</p>
                                <p>(Click the card for place details)</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p>No results found.</p>
            @endforelse
        </div>
    </div>
    <br>
<br>
@endsection



