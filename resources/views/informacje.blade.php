@extends('layouts.app')

@section('headAssets')
<link href="{{ asset('css/informacje.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!-- Nagłówek -->
<header class="page-section" id="naglowek">
    <div class="container">
        <div class="text-center">
            <h3>Informacje na temat tej aplikacji internetowej</h3>
        </div>
    </div>
</header>
<section id="nawigacja">
    <div id="grafiki">Użyte grafiki</div>
    <div id="narzedzia">Użyte narządzia</div>
    <div id="serwisy">Użyte serwisy</div>
    <div id="szablony">Użyte szablony</div>
</section>
<section id="tresc">
</section>
<footer>
    <div class="text-center">
        <p>Copyright &copy; Jakub Kopeć 2024</p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- Core theme JS-->
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- Content JS -->
<script src="{{ asset('js/informacje.js') }}"></script>
@endsection
