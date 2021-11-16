@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="schedule-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" role="tab">
                        <h5>REPORTS</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#flowers" role="tab">
                        <h5>FLOWERS</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#rooms" role="tab">
                        <h5>ROOMS</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#flowers" role="tab">
                        <h5>PLACE FOR EVENTS</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#event" role="tab">
                        <h5>PLACE FOR TOUR</h5>
                    </a>
                </li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane active" id="flowers" role="tabpanel">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link">ANNUALY INCOME</a></li>
                        <li class="nav-item"><a class="nav-link site-btn"><h5> {{ $flowerYearReport }} $</h5></a></li>
                    </ul>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link">MONTHLY INCOME</a></li>
                        @foreach ($flowerMonthReport as $month)
                            <li class="nav-item"><a class="nav-link site-btn">{{ $month->month }}</a></li>
                        @endforeach
                        
                    </ul>
        
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link"></a></li>
                        @foreach ($flowerMonthReport as $month)
                            <li class="nav-item"><a class="nav-link site-btn"><h5>{{ $month->price }} $</h5></a></li>
                        @endforeach
                        
                    </ul>
                   
        
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>FLOWER</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>BUYER</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>PAID PRICE</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>DELIVERy DATE</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>SERVICE</h5>
                                    </a>
                                </li>
                            </ul>
        
                            @foreach ($reports as $report)
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $report->type }}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $report->names }}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $report->price }} $</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $report->delivery_date }}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $report->status }}</h5>
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                </div>


                <div class="tab-pane" id="rooms" role="tabpanel">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link">ANNUALY INCOME</a></li>
                        <li class="nav-item"><a class="nav-link site-btn"><h5> {{ $roomYearReport }} $</h5></a></li>
                    </ul>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link">MONTHLY INCOME</a></li>
                        @foreach ($roomMonthReport as $month)
                            <li class="nav-item"><a class="nav-link site-btn">{{ $month->month }}</a></li>
                        @endforeach
                        
                    </ul>
        
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link"></a></li>
                        @foreach ($roomMonthReport as $month)
                            <li class="nav-item"><a class="nav-link site-btn"><h5>{{ $month->price }} $</h5></a></li>
                        @endforeach
                        
                    </ul>
                   
        
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>ROOM</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>CLIENT</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>PAID PRICE</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>IN DATE</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link site-btn">
                                        <h5>OUT DATE</h5>
                                    </a>
                                </li>
                            </ul>
        
                            @foreach ($roomReports as $roomReport)
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $roomReport->room_nmb }}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $roomReport->names }}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $roomReport->price }} $</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $roomReport->in_date }}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <h5>{{ $roomReport->out_date }}</h5>
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                </div>
        </div>
    </div>
    </div>

@endsection