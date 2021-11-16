@extends('layout.app')

@section('content')
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Fill the required information to add new kind of Place for an event</h2>

          <form 
            action="/event" 
            method="post" 
            class="tm-contact-form"
            enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                  <select name="type" id="" class="form-control">
                      <option><-- SELECT ONE --></option>
                      <option value="sale">SALE</option>
                      <option value="garden">GARDEN</option>
                  </select>
                @if ($errors->has('type'))
                    <span class="text-danger text-left">{{ $errors->first('type') }}</span>
                @endif
              </div><div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="PRICE OF THIS PLACE" value="{{ old('price') }}" />
                @if ($errors->has('price'))
                    <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="text" name="capacity" class="form-control" placeholder="HOW MANY CAN IT HOST" value="{{ old('capacity') }}" />
                @if ($errors->has('capacity'))
                    <span class="text-danger text-left">{{ $errors->first('capacity') }}</span>
                @endif
              </div>
              <div class="form-group">
                <textarea name="description" id="" class="form-control" placeholder="tell us about this place" cols="30" rows="10">
                    {{ old('description') }}
                </textarea>
                @if ($errors->has('description'))
                    <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                @endif
              </div>

              <div class="form-group">
                <input type="file" name="picture" class="form-control" value="{{ old('picture') }}" >
                @if ($errors->has('picture'))
                    <span class="text-danger text-left">{{ $errors->first('picture') }}</span>
                @endif
              </div>
              
              
              <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">SUBMIT</button> 
              </div>               
            </div>
          </form>
        </section>
      </div>
    </div>
@endsection