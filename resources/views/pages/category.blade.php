<link rel="stylesheet" href="{{ asset('css/category-style.css') }}">
<h3 style="font-size: 40px; color: blue; font-weight: bold; text-shadow: 0px 2px 4px #D3D3D3;margin: 41px 129px 0 129px;">Categories</h3>

<br>
<div class="container category-container">
    <div class="row category-row" onclick="location.href='{{ route('home') }}'">
      <h5>Foods</h5>
    </div>
    <div class="row category-row">
      <h5>Laundry</h5>
    </div>
    <div class="row category-row">
      <h5>Barber</h5>
    </div>
    <div class="row category-row">
      <h5>Hospital</h5>
    </div>
    <div class="row category-row">
      <h5>Market</h5>
    </div>
    <div class="row category-row">
      <h5>Gas Station</h5>
    </div>
    <div class="row category-row">
      <h5>Pharmacy</h5>
    </div>
    <div class="row category-row">
      <h5>Public Transport Facilities</h5>
    </div>
  </div>
  <br>
  <br>
  <!-- Card Section -->
  <h3 style="font-weight: bold; margin: 21px 129px 20px 129px;">Explore <span style="color:orangered;font-weight:bold;">Foods</span></h3>
  <br>

  <div class="kumpulan-card">
    <div class="card-container mt-4">
        <div class="row">
            <div class="card">
              <img src="img/images.jpg" class="card-img" alt="Image">
              <div class="circle-bg">
                <i class="far fa-heart bookmark-icon"></i>
              </div>
              <div class="card-body">
                <div class="body-row">
                  <div class="body-col">
                    <h5 class="card-title custom-title">Card Title</h5>
                  </div>
                  <div class="col-auto">
                    <span class="ml-1">4</span>
                    <i class="far fa-heart"></i>
                  </div>
                </div>
                <p class="card-text">Place addresses</p>
                <h6 class="card-text category-text">Category</h6>
              </div>
            </div>
        </div>
      </div>
      <div class="card-container mt-4">
        <div class="row">
            <div class="card">
              <img src="img/images.jpg" class="card-img" alt="Image">
              <div class="circle-bg">
                <i class="far fa-heart bookmark-icon"></i>
              </div>
              <div class="card-body">
                <div class="body-row">
                  <div class="body-col">
                    <h5 class="card-title custom-title">Card Title</h5>
                  </div>
                  <div class="col-auto">
                    <span class="ml-1">4</span>
                    <i class="far fa-heart"></i>
                  </div>
                </div>
                <p class="card-text">Place addresses</p>
                <h6 class="card-text category-text">Category</h6>
              </div>
            </div>
        </div>
      </div>
    
      <div class="card-container mt-4">
        <div class="row">
            <div class="card">
              <img src="img/images.jpg" class="card-img" alt="Image">
              <div class="circle-bg">
                <i class="far fa-heart bookmark-icon"></i>
              </div>
              <div class="card-body">
                <div class="body-row">
                  <div class="body-col">
                    <h5 class="card-title custom-title">Card Title</h5>
                  </div>
                  <div class="col-auto">
                    <span class="ml-1">4</span>
                    <i class="far fa-heart"></i>
                  </div>
                </div>
                <p class="card-text">Place addresses</p>
                <h6 class="card-text category-text">Category</h6>
              </div>
            </div>
        </div>
      </div>
    
  </div>
  
  <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-outline-primary font-weight-bold">View All</button>
</div>


  <br>
  <br>
