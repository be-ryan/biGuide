@extends('layouts.main')

<title>About</title>

<link rel="stylesheet" href="{{ asset('css/about-styles.css') }}">
<link rel="icon" href="{{ asset('img/favicon.png') }}">

@section('content')

    <div class="container">
        <div class="align-center">
            <h2 style="text-align: center"></h2>
            <p class="font-weight-bold" style="text-align: center"> the one and only <span class="orange-text"> Binusian’s </span> reliable guide.</p>
            <div class="rectangle"></div>

        <div class="row clearfix">
            <div class="col-sm-12 col-md-6">
                <img id="kantin-1" src="/img/kantin_1.jpg" class="float-start">
            </div>
            <div class="col-sm-12 col-md-6">
                <h4 class="font-weight-bold" style="font-size:25px"> About Us </h4>
                <p> Bi.Guide is a guide that focuses on helping Binusians find out the places that must be visited around Binus. With this guide, Binusians can easily find out what places they can visit and where they are located. Bi.guide has various information about places around Binus, such as restaurants, cafes, barbershops, laundry, churches, mosques, and many more. </p>
            </div>
        </div>
        <div class="rectangle"></div>

        <div class="row clearfix">
            <div class="col-sm-12 col-md-6">
                <h4 class="font-weight-bold" style="font-size:25px"> Why Us </h4>
                <p> Bi.Guide has a clear and structured guide that can help Binusians find the places they need. There are various categories that we provide so that it can be an option for Binusians to visit and try these places or fill their free time. Bi.Guide is also equipped with ratings and reviews so they can see testimonials given by other Binusians who have visited the place. Also, Bi.Guide can only be accessed by Binusians, so they usually relate to the problems they are facing then they can help each other. </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <img id="kantin-2" src="/img/kantin_2.jpeg" class="float-end">
            </div>
        </div>
        <div class="rectangle"></div>
            
        <div class="row clearfix">
            <div class="col-sm-12 col-md-6">
                <img id="kantin-3" src="/img/kantin_1.jpg" class="float-start">
            </div>
            <div class="col-sm-12 col-md-6">
                <h4 class="font-weight-bold" style="font-size:25px">Our Team </h4>
                <ul>
                    <li>Bryan Fendis - Computer Science</li>
                    <br>
                    <li>Alifia Sembada Anggianto - Computer Science</li>
                    <br>
                    <li>Maylaffinza - Computer Science</li>
                </ul>
            </div>
        </div>
        <div class="rectangle"></div>

        <div class="row clearfix">
            <div class="col-sm-12 col-md-6">
                <h4 class="font-weight-bold" style="font-size:25px"> Contact Us </h4>
                <div class="contact">
                    <div class="whatsapp">
                        <img id="whatsapp" src="/img/whatsapp.png">
                        <span id="context"> +6281234567890 </span>
                    </div>
                    <div class="instagram">
                        <img id="instagram" src="/img/instagram.png">
                        <span id="context"> @bi.guide </span>
                    </div>
                    <div class="gmail">
                        <img id="gmail" src="/img/gmail.png">
                        <span class="p-10"> bi.guide@gmail.com </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="subscribe_channel" style="background-color: #eee">
                    <div class="p-4 text-black rounded" style="text-align: center">
                        <h1 class="font-weight-bold">Join Us!</h1>
                        <h5 class="font-weight-bold">Sign up and we'll send the best deals to you</h5>
                        <input type="text" id="email" name="email" placeholder=" Your email address"><br><br>
                        <a class="btn btn-warning"> SUBSCRIBE </a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

@endsection