@extends('layout.app')

@section('content')
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Fill the required information to add new kind of Room(s)</h2>

          <form 
            action="/room" 
            method="post" 
            class="tm-contact-form"
            enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                  <select name="type" class="form-control" id="">
                      <option value="">--> ROOM TYPE<--</option>
                      <option value="standard">STANDARD</option>
                      <option value="middle">MIDDLE</option>
                      <option value="high">HIGH (vip)</option>
                  </select>
                
                    @if ($errors->has('type'))
                        <span class="text-danger text-left">{{ $errors->first('type') }}</span>
                    @endif
              </div>
              <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="PRICE OF THIS FLOWER" value="{{ old('price') }}" />
                @if ($errors->has('price'))
                    <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="text" name="room_nmb" class="form-control" placeholder="ROOM NUMBER" value="{{ old('room_nmb') }}" />
                @if ($errors->has('room_nmb'))
                    <span class="text-danger text-left">{{ $errors->first('room_nmb') }}</span>
                @endif
              </div>
              <div class="form-group">
                <select name="capacity" class="form-control" id="">
                    <option value="">--> ROOM OCUPATION<--</option>
                    <option value="single">SINGLE</option>
                    <option value="shareble">SHAREBLE</option>
                </select>
                @if ($errors->has('capacity'))
                    <span class="text-danger text-left">{{ $errors->first('capacity') }}</span>
                @endif
              </div>
              <div class="form-group">
                <textarea name="description" id="" class="form-control" placeholder="tell us about this flower" cols="30" rows="10">
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