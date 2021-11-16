@extends('layout.app')

@section('content')
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Fill the required information to order flowers</h2>

          @if ($errors->any()) 
            <div class="col-lg-6 col-md-6">
              <ul>
                @foreach( $errors->all() as $error)
                  <li>
                    {{$error}}
                  </li>
                @endforeach
              </ul>
              {{session()->get('message')}}
            </div> 
          @endif
          <form 
            action="/bookRoom" 
            method="post" 
            class="tm-contact-form"
            id="rooms"
            >
            @csrf
            <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="{{$room->id}}" />
                <input type="hidden" name="price" id="pric" class="form-control" value="{{$room->price}}" />
              </div>
              <div class="form-group">
                <input type="text" name="names" class="form-control" placeholder="NAMES" />
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="EMAIL" />
              </div><div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="PHONE NUMBER" />
              </div>
              <div id="days">
                <div class="form-group">
                  <label>NUMBER OF ROOMS</label>
                  <input type="text" name="number_of_rooms" id="nrooms" class="form-control" placeholder="NUMBER OF ROOMS" />
                </div>
                <div class="form-group">
                  <label>IN DATE</label>
                  <input type="date" id="indate" min="<?php echo date("Y-m-d");?>" name="indate" class="form-control" title="WHEN DO YOU WANT IT" />
                </div>
                <div class="form-group">
                  <label>OUT DATE</label>
                  <input type="date" name="outdate" id="outdate" class="form-control" title="WHEN DO YOU WANT IT" />
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="price" id="price" readonly class="form-control" placeholder="PRICE" title="PRICE YOU WILL PAY"/>
              </div>
              <div class="form-group">
                <p id="check-room-status"></p>
              </div>       
              <div class="form-group">
                <button class="tm-more-button" type="submit" id="submit" name="submit">SUBMIT</button> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
              <img src="{{url('/images/services/'.$room->image)}}" alt="">
              
            </div> 
          </form>
        </section>
      </div>
    </div>
    <script>
       
    </script>
@endsection


