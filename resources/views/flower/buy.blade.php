@extends('layout.app')

@section('content')
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Fill the required information to order flowers</h2>

          <form 
            action="/buyflowers" 
            method="post" 
            class="tm-contact-form">
            @csrf
            <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="{{$flower->id}}" />
                <input type="hidden" id="prc" class="form-control" value="{{$flower->price}}" />
              </div>
              <div class="form-group">
                <input type="text" name="names" class="form-control" placeholder="NAMES" value="{{ old('names') }}"/>
                @if ($errors->has('names'))
                    <span class="text-danger text-left">{{ $errors->first('names') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="EMAIL" value="{{ old('email') }}"/>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
              </div><div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="PHONE NUMBER" value="{{ old('phone') }}"/>
                @if ($errors->has('phone'))
                    <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="ADDRESS WHERE FLOWER WILL BE DELIVERED" title="Address where we can deliver your flowers" value="{{ old('address') }}"/>
                @if ($errors->has('address'))
                    <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="date" name="date" class="form-control" title="WHEN DO YOU WANT IT" value="{{ old('date') }}"/>
                @if ($errors->has('date'))
                    <span class="text-danger text-left">{{ $errors->first('date') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="text" name="quantity" id="cuantity" class="form-control" placeholder="QUANTITY" value="{{ old('quantity') }}"/>
                @if ($errors->has('quantity'))
                    <span class="text-danger text-left">{{ $errors->first('quantity') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="text" name="price" id="price" class="form-control" placeholder="PRICE" readonly title="PRICE YOU WILL PAY" value="{{ old('price') }}"/>
                @if ($errors->has('price'))
                    <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                @endif
              </div>
              
              <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">SUBMIT</button> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
              <img src="{{url('/images/services/'.$flower->picture)}}" alt="">
            </div> 
          </form>
        </section>
      </div>
    </div>

@endsection

