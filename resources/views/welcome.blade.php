@extends('layout.app')
@section('content')
  <section class="tm-welcome-section">
    <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="{{url('/images/light.png')}}" alt="Light" class="light light-1">
          <img src="{{url('/images/light.png')}}" alt="Light" class="light light-2">
          <img src="{{url('/images/light.png')}}" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header">
            <img src="{{url('/images/header-line.png')}}" alt="Line" class="tm-header-line">&nbsp;@yield('ttle')&nbsp;&nbsp;
            <img src="{{url('/images/header-line.png')}}" alt="Line" class="tm-header-line"></h2>
            
          <h2 class="gold-text tm-welcome-header-2">Mugongo Garden Ltd</h2>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>           
        <img src="images/travaler.png" alt="Table Set" class="tm-table-set img-responsive">    
      </div> 
    </section>
    
          @yield('service')
@endsection