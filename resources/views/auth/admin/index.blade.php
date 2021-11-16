@extends('layout.app')
@section('content')
    <div class="tm-main-section light-gray-bg">
        <div class="container" id="main">
            <section class="tm-section row">
                <div class="col-lg-12 tm-section-header-container margin-bottom-30">
                <h2>
                    <a href="/register" class="tm-section-header black-text tm-handwriting-font">Add New Work</a>
                    </h2>
                <div class="tm-hr-container"><hr class="tm-hr"></div>
                </div>

                <div class="col-lg-12 tm-section-header-container margin-bottom-30">
                <h2>
                    <a href="/roomsRepoert" class="tm-section-header black-text tm-handwriting-font">
                    Rooms Report
                    </a>
                </h2>
                <div class="tm-hr-container"><hr class="tm-hr"></div>
                </div>

                <div class="col-lg-12 tm-section-header-container margin-bottom-30">
                    <h2 class="tm-section-header black-text tm-handwriting-font">
                        <a href="/flowersReport" class="tm-section-header black-text tm-handwriting-font">
                        Flower Report</a>
                    </h2>
                    <div class="tm-hr-container"><hr class="tm-hr"></div>
                    </div>
            </section>
        </div>
    </div>
@endsection