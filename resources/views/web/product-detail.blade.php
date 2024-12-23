<x-web_layout title="Contact - Web-Temp">
<div class="bg-img">

    <div class="container-fluid">
    <div class="h1 text-center mb-5 col-12 text-white pt-16">Product Detail</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src={{$product->Pro_Img}} class="d-block w-100" alt="...">
      <div class="backdrop-blur-xl carousel-caption d-none d-md-block">
        <h5 class="h3 text-black">Home Page</h5>
        <p class="p  text-black">Home page of website with auto changing font</p>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <img src="{{asset("ds-about.png")}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h3 text-black">About Us Section</h5>
        <p class="p  text-black">About us section of website with some style in which images will be shown on hover</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset("ds-pay.png")}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="h3 text-black">Payment Page</h5>
        <p class="p  text-black">Payment page with some styling between tilt marquees</p>
      </div>
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="mx-auto flex flex-col md:flex-row w-[100%] justify-center place-items-center"><button class="btn  btn-lg login_btn mt-4" type="submit"><a href="./product">Back</a></button><button class="btn  btn-lg login_btn mt-4" type="submit"><a href="./order">Order</a></button></div>
        </div>
</x-web_layout>