@extends('welcome')
@section('ttle')
Welcome To
@endsection
@section('service')
<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
<section class="tm-section row">
    <div class="col-lg-9 col-md-9 col-sm-8">
      <h2 class="tm-section-header gold-text tm-handwriting-font">Our history</h2>
      <h2>Mugongo-Garden Ltd</h2>
      <p class="tm-welcome-description">########### ############ ######### ######## ######## ######## ########### ########## ######## ############ ############ ########## ########### ########### ###### ########## ########### ########## ########### ######### ########## ############ ########### ########## ########### ############ ########### ############ ########### ########### ########## #.</p>
      <a href="#" class="tm-more-button margin-top-30">Read More</a> 
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
      <div class="inline-block shadow-img">
        <img src="{{url('/images/bus.jpeg')}}" alt="Image" class="img-circle img-thumbnail">  
      </div>              
    </div>            
  </section>
<section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="images/logo.png" alt="Logo" class="tm-site-logo"> Our Offer</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>          
          <div class="col-lg-12 tm-special-container margin-top-60">
            <div class="tm-special-container-left"> <!-- left -->
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="images/services/tour.jpg" alt="Special" class="tm-special-img img-responsive">  
                  <a href="#">
                    <div class="tm-special-description">
                      <h3 class="tm-special-title">TOURS</h3>
                      <p>#### ###### ########## ######## ####### ######.</p>  
                    </div>            
                  </a>
                </div>
              </div>
            </div>
            <div class="tm-special-container-right"> <!-- right -->
              <div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="images/services/flower.jpg" alt="Special" class="img-responsive">  
                    <a href="/flower">
                      <div class="tm-special-description">
                        <h3 class="tm-special-title">FLOWERS</h3>
                        <p>#### ###### ########## ######## ####### ######.</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>
              <div class="tm-special-container-lower">
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="images/services/room.jpg" alt="Special" class="img-responsive">  
                    <a href="/rooms">
                      <div class="tm-special-description">
                        <p>ROOMS</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="images/services/event.jpg" alt="Special" class="img-responsive">  
                    <a href="/events">
                      <div class="tm-special-description">
                        <p>EVENTS</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>              
            </div>
          </div>
        </section>
        
        <section class="schedule-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 tm-section-header-container">
                    <h2 class="tm-section-header gold-text tm-handwriting-font">
                        <img src="images/logo.png" alt="Logo" class="tm-site-logo"> Our Services</h2>
                    <div class="tm-hr-container"><hr class="tm-hr"></div>
                </div>  
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#empt" role="tab">
                                    <h5>SERVICES</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#rooms" role="tab">
                                    <h5>ROOMS & RODGE</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#flowers" role="tab">
                                    <h5>FLOWER PLANTING</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#event" role="tab">
                                    <h5>PLACE FOR EVENT</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <h5>TOUR SITES</h5>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="empt" role="tabpanel">
                            </div>
                            <div class="tab-pane" id="rooms" role="tabpanel">
                                @include('rooms.list')
                            </div>
                            <div class="tab-pane" id="flowers" role="tabpanel">

                                @auth
                                    @foreach ($requestedFlowers as $requestedFlower)
                                        <div class="st-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="sc-pic">
                                                            <img src="{{url('/images/flowers/'.$requestedFlower->picture)}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="sc-text">
                                                            <h4>{{ $requestedFlower->name }}</h4>
                                                            <ul>
                                                            <li><i class="fa fa-user"></i> {{ $requestedFlower->type }}</li>
                                                                <li><i class="fa fa-envelope"></i> {{ $requestedFlower->price }} $
                                                                </li>
                                                            </ul>
                                                            <form action="/flowers/{{ $requestedFlower->id }}"
                                                                method="POST"
                                                                >
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="tm-more-button margin-top-30">delivered</button>
                                                            </form>
                                                        </div>
                                                        active
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                        <p class="sc-widget">
                                                            <b>TO </b><br>
                                                            <u>Names</u> : {{ $requestedFlower->names }}<br>
                                                           <a href="tel:{{ $requestedFlower->phone }}"><u>Phone</u>: {{ $requestedFlower->phone }}</a> <br>
                                                            <u>Email</u>: {{ $requestedFlower->email }}<br>
                                                            <b>LOCATION</b><br>
                                                            <u>Address</u>: {{ $requestedFlower->address }}<br>
                                                            <u>Delivary Date</u>: {{ $requestedFlower->delivery_date }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endauth

                                @guest
                                    @foreach ($flowers as $flower)
                                        <div class="st-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="sc-pic">
                                                            <img src="{{url('/images/flowers/'.$flower->picture)}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="sc-text">
                                                            <h4>{{ $flower->name }}</h4>
                                                            <ul>
                                                            <li><i class="fa fa-user"></i> {{ $flower->type }}</li>
                                                                <li><i class="fa fa-envelope"></i> {{ $flower->price }} $
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p class="sc-widget">
                                                            {{Str::limit($flower->description), 30 }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endguest
                                


                            </div>
                            <div class="tab-pane" id="event" role="tabpanel">
                                @foreach ($events as $event)
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{url('/images/events/'.$event->image)}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="sc-text">
                                                    <h4>{{ $event->type }}</h4>
                                                    {{ $event->name }}
                                                    <ul>
                                                        <li>{{ $event->capacity }} ppl</li>
                                                        <li> {{ $event->price }} $
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="sc-widget">
                                                    {{Str::limit($event->description), 30 }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Expert People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Too Difficult People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="img/schedule/schedule-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
</div>
</div>
@endsection