@extends('layout.app')
@section('content')
            
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link">ANNUALY INCOME</a></li>
                <li class="nav-item"><a class="nav-link active"> {{ $flowerYearReport }} $</a></li>
            </ul>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link">MONTHLY INCOME</a></li>
                @foreach ($flowerMonthReport as $month)
                    <li class="nav-item"><a class="nav-link active">{{ $month->month }}</a></li>
                @endforeach
                
            </ul>

            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link"></a></li>
                @foreach ($flowerMonthReport as $month)
                    <li class="nav-item"><a class="nav-link active">{{ $month->price }} $</a></li>
                @endforeach
                
            </ul>
           

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link">
                                <h5>FLOWER</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <h5>BUYER</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <h5>PAID PRICE</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <h5>DELIVERy DATE</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
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
@endsection