@extends('layout.app')

@section('content')
    <div class="light-gray-bg">
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
            action="" 
            method="post" 
            class="tm-contact-form"
            id="rooms"
            >
            @csrf
            <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="{{$event->id}}" />
                <input type="hidden" name="price" id="pric" class="form-control" value="{{$event->price}}" />
              </div>
              <div class="form-group">
                <input type="text" name="names" class="form-control" placeholder="NAMES" />
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="EMAIL" />
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="PHONE NUMBER" />
              </div>
            
                <div class="form-group">
                  <label>DATE OF EVENT</label>
                  <input type="date" id="indate" min="<?php echo date("Y-m-d");?>" name="indate" class="form-control" title="WHEN DO YOU WANT IT" />
                </div>
               
              <div class="form-group">
                  <select class="form-control" name="type">
                      <option value="ceremoney">Ceremoney</option>
                      <option value="meeting">Meeting</option>
                  </select>
            </div>
            <div class="form-group">
                <input type="number" name="number_of_ppl" class="form-control" placeholder="HOW MANY ARE YOU" />
              </div> 
              <div class="form-group">
                <button class="tm-more-button" type="submit" id="submit" name="submit">SUBMIT</button> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
              <img src="{{url('/images/services/'.$event->image)}}" alt="">
              
            </div> 
          </form>
        </section>
      </div>
    </div>
    <script>
       
    </script>
@endsection


