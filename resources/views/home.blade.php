@extends('layouts.main')

<title>BiGuide</title>

<link rel="stylesheet" href="{{ asset('css/content-styles.css') }}">

@section('content')

    <div class="row">
        <div class="col" style="margin: 41px 129px 0 129px;">
            <h1><span style="color: orangered;">Bi</span><span style="color: blue;">.Guide</span></h1>
            <h3>The one and only <span style="color: orangered;" class="font-weight-bold">Binusian’s</span> reliable guide.</h3>
            <p class="justify-align">Discover a wide range of facilities tailored to meet your needs, from <span class="font-weight-bold">cozy cafes perfect</span> for studying to <span class="font-weight-bold">vibrant restaurants</span> for socializing. With our user-friendly interface, you can easily <span class="font-weight-bold">explore nearby parks, libraries, and other amenities </span> that enhance your campus experience.
                But it doesn't stop there - we believe in the power of community. That's why we encourage you to contribute by adding your favorite places and sharing your valuable reviews. <span class="font-weight-bold highlighted" style="color: orangered;">Help fellow students discover hidden gems and make informed decisions about where to spend their time 😉 </span>.</p>
                <br>
                <div class="d-flex justify-content-end">
                    <a href="/explore" class="btn btn-outline-primary fw-bolder">Let's get started!</a>
                </div>
            </div>
    
        <div class="col">
            
            <div class = "container-pic-home" class="display-fluid">
                <h4 class="font-weight-bold">Best  <span style="color: blue;">place of the day</span> to visit</h4>
                <img src="img/fore.jpg" alt="" style="width: 80%; height: 80%; display: block; margin: 0 auto;border: 2px black solid;
                border-radius: 10px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">
                <p class="font-weight-bold">Fore Coffee - Kemanggisan</p>
                <div class="d-flex justify-content-center">
                    {{-- <button type="button" class="btn btn-outline-dark mx-auto">See details</button> --}}
                </div>
                <br>
            </div>
        </div>
      </div>
    
      <br>
      <br>
      <br>
      <br>
    
    <h1 class="text-center my-3" >Reasons why you should choose <span style="color: orangered;">Bi</span><span style="color: blue;">.Guide</span></h1>
      <div class="whyy">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <h5 class="font-weight-bold text-center" style="color: blue">Ease of Use</h5>
                    <p>Bi.Guide ensures that users can easily navigate through different sections and find the information they are looking for</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h5 class="font-weight-bold text-center" style="color: blue">Comprehensive Information</h5>
                    <p>Bi.Guide provide comprehensive information about the facilities such as location, opening hours, contact information, and user reviews</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <h5 class="font-weight-bold text-center" style="color: blue">Regular Updates and Fresh Content</h5>
                    <p>Bi.Guide is regularly updated with fresh content include adding new places, updating information, and featuring upcoming events</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h5 class="font-weight-bold text-center" style="color: blue">Integration with Social Media </h5>
                    <p>Bi.Guide allows users to easily share their experiences, recommendations, and reviews on popular social media platforms</p>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    
    <h2 class="text-center font-weight-bold" style = "color: blue">Testimonials</h2>
    
    <div class="row row-testi">
        <div class="col d-flex col-with-border">
            <p>"I can't imagine campus life without this website. It saves me time and effort in finding the best spots around my college. The customization options and social media integration make it easy to connect with other students. This website has enhanced my college experience."</p>
            <div class="rectangle"></div>
            <p>Sarah - Computer Science student</p>
        </div>
        <div class="col d-flex col-with-border">
            <p>"I can't imagine campus life without this website. It saves me time and effort in finding the best spots around my college. The customization options and social media integration make it easy to connect with other students. This website has enhanced my college experience."</p>
            <div class="rectangle"></div>
            <p>Sarah - Computer Science student</p>
        </div>
        <div class="col d-flex col-with-border">
            <p>"I can't imagine campus life without this website. It saves me time and effort in finding the best spots around my college. The customization options and social media integration make it easy to connect with other students. This website has enhanced my college experience."</p>
            <div class="rectangle"></div>
            <p>Sarah - Computer Science student</p>
        </div>
    </div>
    
    <br>
    <br>
    <br>

    <div class="mb-5 text-center">
        <h1 class="mb-1">So, what are you waiting for?</h1>
        <h1 class="fw-semibold mb-1"><a href="/explore" class="text-decoration-none">Explore places now</a></h1>
        <h1 class=" mb-1">or</h1>
        <h1 class="fw-semibold mb-1"><a href="/categories" class="text-decoration-none">Find places based on Categories</a></h1>
    </div>
    
@endsection
