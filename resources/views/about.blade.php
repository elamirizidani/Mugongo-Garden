@extends('welcome')
@section('ttle')
About Us
@endsection

@section('service')
<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Our history</h2>
          <h2>Mugongo-Garden Ltd</h2>
          <p class="tm-welcome-description">########### ############ ######### ######## ######## ######## ########### ########## ######## ############ ############ ########## ########### ########### ###### ########## ########### ########## ########### ######### ########## ############ ########### ########## ########### ############ ########### ############ ########### ########### ########## #.</p>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          <div class="inline-block shadow-img">
            <img src="{{url('/images/bus.jpeg')}}" alt="Image" class="img-circle img-thumbnail">  
          </div>              
        </div>            
      </section>  

      <section class="tm-section row">
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          <div class="inline-block shadow-img">
            <img src="{{url('/images/bus.jpeg')}}" alt="Image" class="img-circle img-thumbnail">  
          </div>              
        </div>   
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Maddam Carl</h2>
          <h2>Her history</h2>
          <p class="tm-welcome-description">########### ############ ######### ######## ######## ######## ########### ########## ######## ############ ############ ########## ########### ########### ###### ########## ########### ########## ########### ######### ########## ############ ########### ########## ########### ############ ########### ############ ########### ########### ########## #.</p>
          
        </div>
                
      </section>  

      <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Orphaneg</h2>
          <p class="tm-welcome-description">########### ############ ######### ######## ######## ######## ########### ########## ######## ############ ############ ########## ########### ########### ###### ########## ########### ########## ########### ######### ########## ############ ########### ########## ########### ############ ########### ############ ########### ########### ########## #.</p>
          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          <div class="inline-block shadow-img">
            <img src="{{url('/images/bus.jpeg')}}" alt="Image" class="img-circle img-thumbnail">  
          </div>              
        </div>            
      </section>  
      <div>   
      </div> 
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
        <div class="schedule-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" role="tab">
                        <h5>OUR SERVICES</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/flowers">
                        <h5>FLOWERS & FLOWER PLANTING</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rooms" >
                        <h5>ROOMS & RODGE</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/events" >
                        <h5>PLACE FOR EVENTS</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tour" >
                        <h5>PLACE FOR TOUR</h5>
                    </a>
                </li>
            </ul>
        </div>
    </div>
  </div>
@endsection