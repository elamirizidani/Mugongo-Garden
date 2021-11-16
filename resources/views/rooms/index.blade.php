@extends('layout.app')

@section('content')

<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">ROOMS AND RODGES</h2>
          <p class="tm-welcome-description">
              HHH HHH HHHH HHHHH H HHHH HHHHH HHHHHH H   HHHHHH H H H   

          </p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          <div class="inline-block shadow-img">
            <img src="images/services/flower.jpg" alt="Image" class="img-circle img-thumbnail">  
          </div>              
        </div>            
      </section>       
      @if (session()->has('message')) 
        <div class="tm-product"> 
          <div class="tm-product-text">
          <p class="tm-product-description">{{session()->get('message')}}</p>
          </div>
        </div>
      @endif

      <section class="tm-section row">
        <div class="col-lg-12 tm-section-header-container margin-bottom-30">
          <h2 class="tm-section-header gold-text tm-handwriting-font">
              <img src="images/logo.png" alt="Logo" class="tm-site-logo"> Our Rooms</h2>
          <div class="tm-hr-container"><hr class="tm-hr"></div>
        </div>
        <div>
          @auth
            <a href="/rooms/create" class="tm-more-button margin-top-30">Add Room</a> 
            <br>
            @endauth  
                     
          <div class="tm-menu-product-content col-lg-12 col-md-9"> <!-- menu content -->
          <div class="tab-content">
          <div class="tab-pane active" id="tabs-1" role="tabpanel">
            
            @foreach( $rooms as $room )
                <div class="tm-product"> 
                    <img class="tm-image" src="{{url('/images/rooms/'.$room->image)}}" alt="Product">
                    <div class="tm-product-text">
                    <h3 class="tm-product-title">{{ $room->type }}</h3>
                    <p class="tm-product-description">{{ $room->description }}</p>
                    </div>
                    <div class="tm-product-price">
                    <a href="/bookRoom/{{ $room->id }}" class="tm-product-price-link tm-handwriting-font">
                        <span class="tm-product-price-currency">$</span>{{$room->price}}
                        <span class="buy-btn">BUY</span>
                        </a>
                    </div>
                </div>
            @endforeach

          </div>
          </div>
          </div>
        </div>          
      </section>
    </div>
  </div> 

@endsection