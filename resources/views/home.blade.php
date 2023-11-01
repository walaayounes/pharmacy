@extends('layouts.template')

@section('content')
<div class="owl-carousel owl-single px-0">
    <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto align-self-center">
            <div class="site-block-cover-content text-center">
              <h1 class="mb-0"><strong class="text-primary">Pharmative</strong> Opens 24 Hours</h1>

              <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                </div>
              </div>
              
              <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto align-self-center">
            <div class="site-block-cover-content text-center">
              <h1 class="mb-0">New Medicine <strong class="text-primary">Everyday</strong></h1>
              <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                </div>
              </div>
              <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



  <div class="site-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="feature">
            <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
            <h3><a href="#">Free Delivery</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
            <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature">
            <span class="wrap-icon flaticon-medicine"></span>
            <h3><a href="#">New Medicine Everyday</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
            <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature">
            <span class="wrap-icon flaticon-test-tubes"></span>
            <h3><a href="#">Medicines Guaranteed</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
            <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="title-section text-center col-12">
          <h2>Pharmacy <strong class="text-primary">Products</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 block-3 products-wrap">
          <div class="nonloop-block-3 owl-carousel">
            
@foreach ($medicines as $medicine)
            <div class="text-center item mb-4 item-v2">
              <span class="onsale">Sale</span>
              <a href="shop-single.html"> <img src="{{ $medicine->image_url }}" alt="Image"></a>
              <h3 class="text-dark"><a href="shop-single.html">{{ $medicine->name }}</a></h3>
              <p class="price">{{ $medicine->price }}</p>
            </div>
            @endforeach

            

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
