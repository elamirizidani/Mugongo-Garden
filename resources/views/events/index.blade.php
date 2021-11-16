@extends('layout.app')

@section('content')

<div class="light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Place for events</h2>
          <p class="tm-welcome-description">
              HHH HHH HHHH HHHHH H HHHH HHHHH HHHHHH H   HHHHHH H H H   

          </p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          <div class="inline-block shadow-img">
            <img src="images/services/event.jpg" alt="Image" class="img-circle img-thumbnail">  
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
              <img src="images/logo.png" alt="Logo" class="tm-site-logo"> Our Place</h2>
          <div class="tm-hr-container"><hr class="tm-hr"></div>
        </div>
        <div>

          @auth
            <a href="/event/create" class="tm-more-button margin-top-30">Add Place</a> 
            <br>
            @endauth  
                     
          <div class="tm-menu-product-content col-lg-12 col-md-12"> <!-- menu content -->
          <div class="tab-content">
          <div class="tab-pane active" id="tabs-1" role="tabpanel">
            
            @foreach( $events as $event )
                <div class="tm-product"> 
                    <img class="tm-image" src="{{url('/images/events/'.$event->image)}}" alt="Product">
                    <div class="tm-product-text">
                    <h3 class="tm-product-title">{{ $event->type }}</h3>
                    <p class="tm-product-description">{{ $event->description }}</p>
                    </div>
                    <div class="tm-product-price">
                    <a href="/bookPlace/{{ $event->id }}" class="tm-product-price-link tm-handwriting-font">
                        <span class="tm-product-price-currency">$</span>{{$event->price}}
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