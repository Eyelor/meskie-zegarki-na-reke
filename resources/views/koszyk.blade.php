@extends('layouts.app')

@section('headAssets')
<link href="{{ asset('css/koszyk.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!-- Koszyk -->
<section class="page-section">
    <div class="container">
        <div class="text-center">
            <form id="koszykForm" action="javascript:koszykAction()" method="post">
                <h3>Koszyk z zegarkami i wysyłka</h3>
                <p>Tutaj możesz dodać zegarki które chcesz kupić do koszyka, wybrać dodatkowe opcje i złożyć zamówienie.</p>
                <fieldset>
                    <legend>Dodawanie produktów do koszyka</legend>
                    <p>
                        <label for="produkt">Produkt:</label>
                        <select id="produkt" name="produkt" title="Produkt, który zmairzasz dodać do koszyka.">
                            <option value="Diesel Mr. Daddy">Diesel Mr. Daddy</option>
                            <option value="Adriatica Multifunction">Adriatica Multifunction</option>
                            <option value="Lorus Chronograph">Lorus Chronograph</option>
                            <option value="G-SHOCK Mudmaster Carbon">G-SHOCK Mudmaster Carbon</option>
                            <option value="Daniel Wellington Iconic Motion Silver">Daniel Wellington Iconic Motion Silver</option>
                            <option value="Tommy Hilfiger Daniel">Tommy Hilfiger Daniel</option>
                        </select>
                    </p>
                    <p>
                        <label for="ilosc">Ilość:</label>
                        <input type="number" 
                            id="ilosc" 
                            name="ilosc" 
                            required 
                            placeholder="1" 
                            title="Wprowadź prawidłowy numer większy lub równy 1!" 
                            min="1"  
                            step="1" 
                            value="1" 
                        >
                    </p>
                </fieldset>
                <p>
                    <input type="submit" value="Dodaj produkt do koszyka" title="Dodaje produkt do koszyka.">
                    <input type="button" value="Pokaż zawartość koszyka" title="Pokazuje zawartość koszyka." onclick="wyswietl()">
                    <input type="reset" value="Usuń wszystkie produkty z koszyka" title="Usuwa wszystkie produkty z koszyka." onclick="usun()">
                </p>
                <div id="wyjscie">
                    <h4>Koszyk:</h4>
                    <p>Koszyk jest pusty!</p>
                    <div id="tabelka"></div>
                </div>
            </form>
            <form id="zamowienieForm" action="javascript:zamowienieAction()" method="post" onsubmit="return validateForm()">
                <fieldset>
                    <legend>Wysyłka</legend>
                    <p>
                        <label for="imieNazwisko">Imię i Nazwisko:</label>
                        <input type="text" 
                            name="imieNazwisko" 
                            id="imieNazwisko" 
                            required 
                            placeholder="Imie Nazwisko" 
                            title="Podaj imię i nazwisko zaczynające się dużymi literami oraz oddzielone spacją lub myślnikiem!" 
                        >
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input type="email" 
                            name="email" 
                            id="email" 
                            required 
                            placeholder="example@email.com" 
                            title="Podaj prawidłowy adres email ze znakiem '@', kropkmi i domeną posiadającą 2-7 liter!" 
                        >
                    </p>
                    <p>
                        <label for="numerTelefonu">Numer telefonu:</label>
                        <input type="tel" 
                            name="numerTelefonu" 
                            id="numerTelefonu" 
                            required 
                            placeholder="123-456-789" 
                            title="Podaj prawidłowy numer telefonu składający się z 9 cyfr!"
                            pattern="^\d{3}-\d{3}-\d{3}$"
                        >
                    </p>
                    <p>
                        <label>Opcje dodatkowe:&nbsp;&nbsp;</label>
                        <input type="checkbox" 
                            id="opcja1" 
                            name="opcjeDodatkowe" 
                            value="specjalne opakowanie" 
                            title="Opakowanie które zapewni dodatkową ochronę twojemu zamówieniu."
                        >
                        <label for="opcja1">Specjalne opakowanie&nbsp;&nbsp;</label>
                        <input type="checkbox" 
                            id="opcja2" 
                            name="opcjeDodatkowe" 
                            value="dłuższa gwarancja" 
                            title="Wydłużenie umowy gwarancyjnej."
                        >
                        <label for="opcja2">Dłuższa gwarancja</label>
                    </p>
                    <p>
                        <label for="dataOdbioru">Data odbioru:</label>
                        <input type="date" 
                            id="dataOdbioru" 
                            name="dataOdbioru" 
                            required 
                            title="Data w której chcesz, aby produkt był gotowy do odbioru."
                        >
                    </p>
                    <p>
                        <label for="informacjeDodatkowe">Informacje dodatkowe:</label><br>
                        <textarea id="informacjeDodatkowe" 
                            name="informacjeDodatkowe" 
                            rows="5" 
                            cols="50" 
                            placeholder="Informacje dodatkowe..." 
                            title="Dodatkowe informacje na temat zamówienia."
                        ></textarea>
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Płatność</legend>
                    <p>
                        <label>Karta:&nbsp;&nbsp;</label>
                        <input type="radio" name="karta" value="visa" id="visaRadio" required title="Rodzaj karty płatniczej.">
                        <label for="visaRadio">Visa&nbsp;&nbsp;</label>
                        <input type="radio" name="karta" value="master card" id="mcRadio" required title="Rodzaj karty płatniczej.">
                        <label for="mcRadio">Master Card</label>
                    </p>
                    <p>
                        <label for="numerKarty">Numer karty:</label>
                        <input type="text" 
                            name="numerKarty" 
                            id="numerKarty" 
                            required 
                            placeholder="1234 5678 9101 1121" 
                            title="Podaj prawidłowy numer karty płatniczej składający się z 16 cyfr!" 
                            pattern="^\d{4} \d{4} \d{4} \d{4}$"
                        >
                    </p>
                    <p>
                        <label for="dataWaznosci">Data ważności:</label>
                        <input type="month" 
                            name="dataWaznosci" 
                            id="dataWaznosci" 
                            required 
                            title="Data ważności karty płatniczej."
                        >
                    </p>
                    <p>
                        <label for="cvv">Kod CVV:</label>
                        <input type="text" 
                            name="cvv" 
                            id="cvv" 
                            placeholder="123" 
                            required 
                            title="Kod CVV z odwrotu twojej karty płatniczej." 
                            pattern="^[0-9]{3}$"
                        >
                    </p>
                </fieldset>
                <p>
                    <input type="submit" value="Zapisz zamówienie" title="Zapisuje formularz zamówienia.">
                    <input type="reset" value="Wyczyść formularz" title="Czyści formularz zamówienia.">
                </p>
            </form>
            <div id="jsonObjectZamowienie">
            </div>
            <form id="mojFormularz">
                @csrf
                
                <button type="button" id="przyciskZlozZamowienie" onclick="przeslijDaneDoKontrolera()">Złóż zamówienie</button>
            </form>
            <script>
                var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

                function przeslijDaneDoKontrolera() {
                    // Pobierz obiekt z localStorage
                    var daneZLocalStorage = JSON.parse(localStorage.getItem('zamowienie'));
                    
                    // Dodaj token CSRF do obiektu
                    daneZLocalStorage['_token'] = $('input[name="_token"]').val();
                    localStorage.clear();

                    // Wyślij żądanie AJAX
                    $.ajax({
                        type: 'POST',
                        url: '/cart/store', // Zastąp odpowiednią ścieżką
                        data: JSON.stringify(daneZLocalStorage),
                        contentType: 'application/json', // Ustaw nagłówek Content-Type na application/json
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                        },
                        success: function(data) {
                            // Obsługa sukcesu
                            console.log(data);
                            window.location.href = '/home';
                        },
                        error: function(error) {
                            // Obsługa błędu
                            console.error('Błąd:', error);
                        }
                    });
                }
            </script>
        </div>
    </div>
</section>
<!-- Bootstrap core JS-->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- Core theme JS-->
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<!-- Content JS -->
<script src="{{ asset('js/koszyk.js') }}"></script>
@endsection
