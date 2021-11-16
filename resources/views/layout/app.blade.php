<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mugongo-Garden</title>

  <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/css/templatemo-style.css')}}" rel="stylesheet">
  <link href="{{url('/css/listing/style.css')}}" rel="stylesheet">
  <link rel="shortcut icon" href="{{url('/images/favicon.ico')}}" type="image/x-icon" />

 
  </head>
  <body>
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="{{url('/images/logo.png')}}" alt="Logo" class="tm-site-logo">
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                <li><a href="/" class=" {{Request::is('/') ? 'active':''}}">Home</a></li>
                <li><a href="/about" class=" {{Request::is('about') ? 'active':''}}">About</a></li>
                <li><a href="contact.html">Contact</a></li>

                @if (Auth::user())
                  @if (Auth::user()->role = 'admin')
                  <li><a href="/manage" class=" {{Request::is('/manage') ? 'active':''}}">MANAGE</a></li>
                  @endif
                    
                @endif



                <li>
                  @if (Auth::user())
                      <a href="/logout">
                        LOGOUT
                      </a>
                  @else
                    <a href="/login">
                      LOGIN
                    </a>
                  @endif
                </li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>

    <div>
        @yield('content')
    </div> 
    <footer>
      @include('layout.footer')
    </footer> <!-- Footer content-->  
   <!-- JS -->
   <script type="text/javascript" src="{{url('/js/jquery-3.3.1.min.js')}}"></script>
   <script type="text/javascript" src="{{url('/js/main.js')}}"></script>
   
      <!-- Templatemo Script -->
   <script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>
   <script type="text/javascript" src="{{url('/js/main-home.js')}}"></script>
 </body>
 </html>