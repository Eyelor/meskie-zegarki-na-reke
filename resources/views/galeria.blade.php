@extends('layouts.app')

@section('headAssets')
<link href="{{ asset('css/galeria.css') }}" rel="stylesheet" />
<!-- Lightbox kit -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/lightbox.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
@endsection

@section('content')
<!-- Galeria -->
<section class="page-section">
    <div class="container">
        <div class="text-center">
            <h3>Galeria zegarków</h3>
            <p>Miejsce w którym można nacieszyć oko elegancją, prezencją i jakością wykonania nieprzeciętnych zegarków.</p>
        </div>
        <div class="text-center" id="galeria">
            <a href="{{ asset('assets/img/galeria/zegarek1.jpg') }}" target="_blank" data-lightbox="galeria" data-title="1">
                <img src="{{ asset('assets/img/galeria/zegarek1.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek2.jpg') }}" target="_blank" data-lightbox="galeria" data-title="2">
                <img src="{{ asset('assets/img/galeria/zegarek2.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek2.jpg') }}" target="_blank" data-lightbox="galeria" data-title="3">
                <img src="{{ asset('assets/img/galeria/zegarek3.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek4.jpg') }}" target="_blank" data-lightbox="galeria" data-title="4">
                <img src="{{ asset('assets/img/galeria/zegarek4.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek5.jpg') }}" target="_blank" data-lightbox="galeria" data-title="5">
                <img src="{{ asset('assets/img/galeria/zegarek5.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek6.jpg') }}" target="_blank" data-lightbox="galeria" data-title="6">
                <img src="{{ asset('assets/img/galeria/zegarek6.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek7.jpg') }}" target="_blank" data-lightbox="galeria" data-title="7">
                <img src="{{ asset('assets/img/galeria/zegarek7.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek8.jpg') }}" target="_blank" data-lightbox="galeria" data-title="8">
                <img src="{{ asset('assets/img/galeria/zegarek8.jpg') }}" alt="">
            </a>
            <a href="{{ asset('assets/img/galeria/zegarek9.jpg') }}" target="_blank" data-lightbox="galeria" data-title="9">
                <img src="{{ asset('assets/img/galeria/zegarek9.jpg') }}" alt="">
            </a>
        </div>
    </div>
</section>
<!-- Bootstrap core JS-->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- Core theme JS-->
<script src="{{ asset('js/scripts.js') }}"></script>
@endsection
