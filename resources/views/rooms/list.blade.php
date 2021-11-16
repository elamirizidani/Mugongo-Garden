@auth
@foreach ($bookedRooms as $bookedRoom)
<div class="st-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sc-pic">
                    <img src="{{url('/images/rooms/'.$bookedRoom->image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sc-text">
                    <h4>{{ $bookedRoom->type }}</h4>
                    <ul>
                    <li><i class="fa fa-user"></i> {{ $bookedRoom->capacity }}</li>
                        <li><i class="fa fa-envelope"></i> {{ $bookedRoom->price }} $
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="sc-widget">
                    <u style="font-weight: 700; font-size:16px;">Names</u> : {{ $bookedRoom->names }} <br>
                    <u style="font-weight: 700; font-size:16px;">Phone</u> : <a href="tel:{{ $bookedRoom->phone }} ">{{ $bookedRoom->phone }}</a> <br>
                    <u style="font-weight: 700; font-size:16px;">In Date</u>: {{ $bookedRoom->in_date }} <br>
                    <u style="font-weight: 700; font-size:16px;">Out Date</u>: {{ $bookedRoom->out_date }} <br>
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach

@endauth
@guest
    @foreach ($rooms as $room)
                                    <div class="st-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="sc-pic">
                                                        <img src="{{url('/images/rooms/'.$room->image)}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="sc-text">
                                                        <h4>{{ $room->type }}</h4>
                                                        <ul>
                                                        <li><i class="fa fa-user"></i> {{ $room->capacity }}</li>
                                                            <li><i class="fa fa-envelope"></i> {{ $room->price }} $
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="sc-widget">
                                                        {{Str::limit($room->description), 30 }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
@endguest
