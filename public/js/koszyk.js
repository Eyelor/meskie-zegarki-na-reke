function zapisz() {
    let item = {};
    let ceny = {
        "Diesel Mr. Daddy": 638.00, 
        "Adriatica Multifunction": 1090.00, 
        "Lorus Chronograph": 459.00, 
        "G-SHOCK Mudmaster Carbon": 3799.00, 
        "Daniel Wellington Iconic Motion Silver": 882.00, 
        "Tommy Hilfiger Daniel": 497.00
    };
    item.produkt = document.getElementById('produkt').value;
    item.ilosc = parseFloat(document.getElementById('ilosc').value);
    item.cena = ceny[item.produkt];
    item.wartosc = parseInt(item.ilosc) * parseFloat(item.cena);

    let lista = JSON.parse(localStorage.getItem('lista'));
    if (lista === null) lista = [];
    lista.push(item);
    localStorage.setItem('lista', JSON.stringify(lista));
}

function wyswietl() {
    let lista = JSON.parse(localStorage.getItem('lista'));

    if (lista === null || lista.length === 0) {
        document.getElementById('wyjscie').innerHTML = '<h4>Koszyk:</h4><p>Koszyk jest pusty!</p><div id="tabelka"></div>';
    }
    else {
        let kontent = '<h4>Koszyk:</h4>' + 
            '<p><label for="wyszukiwanie">Wyszukaj produkty w koszyku:</label><input type="search" id="wyszukiwanie"></p>' + 
            '<div id="tabelka"><table id="usun"><tr><td>Nazwa produktu</td><td>Ilość sztuk</td><td>Cena jednostkowa [zł]</td><td>Łączna wartość [zł]</td></tr>';
        let suma = 0;
        for (let i = 0; i < lista.length; i++) {
            kontent += '<tr><td>' + lista[i].produkt + '</td><td>' + lista[i].ilosc + '</td><td>' + lista[i].cena + '</td><td>' + lista[i].wartosc + '</td><td><input type="button" class="usun" value="X" onclick="usunProdukt(' + i + ')" ></td></tr>';
            suma += lista[i].wartosc;
        }
        kontent += '</table><p>Całkowita wartość produktów w koszyku: ' + suma + ' zł</p></div>';
        document.getElementById('wyjscie').innerHTML = kontent;
        $('table, td').css("border", "1px solid black");

        const wyszukiwanie = document.querySelector('#wyszukiwanie');
        wyszukiwanie.addEventListener("input", e => {
            const value = e.target.value;
            wyszukaj(value, suma);
        });
    }
}

function usun() {
    localStorage.clear();
    wyswietl();
}

function usunProdukt(i) {
    let lista = JSON.parse(localStorage.getItem('lista'));

    if (confirm("Usunąć produkt?")) lista.splice(i, 1);

    localStorage.setItem('lista', JSON.stringify(lista));
    wyswietl();
}

function wyszukaj(szukane, suma) {
    let listaWyszukanych = [];
    let lista = JSON.parse(localStorage.getItem('lista'));
    if(szukane.length===0) {
        listaWyszukanych = lista;
    }
    else {
        let pattern = new RegExp(szukane, "i");
        for (let i = 0; i < lista.length; i++) {
            if (pattern.test(lista[i].produkt)) {
                listaWyszukanych.push(lista[i]);
            }
        }
    }
    
    let kontener = document.getElementById("tabelka");
    let tabela = document.getElementById("usun");
    kontener.removeChild(tabela);

    let kontent = '<table id="usun"><tr><td>Nazwa produktu</td><td>Ilość sztuk</td><td>Cena jednostkowa [zł]</td><td>Łączna wartość [zł]</td></tr>';

    if (listaWyszukanych === null || listaWyszukanych.length === 0) {
        kontent += '<tr><td colspan="4">Produktów które próbujesz wyszukać nie ma w twoim koszyku!</td></tr></table><p>Całkowita wartość produktów w koszyku: ' + suma + ' zł</p>';
    }
    else {
        for (let i = 0; i < listaWyszukanych.length; i++) {
            for (let j = 0; j < lista.length; j++) {
                if (lista[j] === listaWyszukanych[i]) {
                    kontent += '<tr><td>' + listaWyszukanych[i].produkt + '</td><td>' + listaWyszukanych[i].ilosc + '</td><td>' + listaWyszukanych[i].cena + '</td><td>' + listaWyszukanych[i].wartosc + '</td><td><input type="button" class="usun" value="X" onclick="usunProdukt(' + j + ')" ></td></tr>';
                    break;
                }
            }
        }
        kontent += '</table><p>Całkowita wartość produktów w koszyku: ' + suma + ' zł</p>';
    }
    kontener.innerHTML = kontent;
    $('table, td').css("border", "1px solid black");
}

function formatPhoneInput() {
    let phoneInput = document.querySelector('#numerTelefonu');
    let inputValue = phoneInput.value.replace(/\D/g, ""); // Usuwa znaki które nie są cyframi
    let formattedValue = "";

    if (inputValue.length > 0) {
        formattedValue += inputValue.slice(0, 3);
    }
    if (inputValue.length > 3) {
        formattedValue += "-" + inputValue.slice(3, 6);
    }
    if (inputValue.length > 6) {
        formattedValue += "-" + inputValue.slice(6, 9);
    }

    phoneInput.value = formattedValue;
}

function formatCardNumberInput() {
    let phoneInput = document.querySelector('#numerKarty');
    let inputValue = phoneInput.value.replace(/\D/g, ""); // Usuwa znaki które nie są cyframi
    let formattedValue = "";

    if (inputValue.length > 0) {
        formattedValue += inputValue.slice(0, 4);
    }
    if (inputValue.length > 4) {
        formattedValue += " " + inputValue.slice(4, 8);
    }
    if (inputValue.length > 8) {
        formattedValue += " " + inputValue.slice(8, 12);
    }
    if (inputValue.length > 12) {
        formattedValue += " " + inputValue.slice(12, 16);
    }

    phoneInput.value = formattedValue;
}

function formatCvvInput() {
    let phoneInput = document.querySelector('#cvv');
    let inputValue = phoneInput.value.replace(/\D/g, ""); // Usuwa znaki które nie są cyframi
    let formattedValue = "";

    if (inputValue.length > 0) {
        formattedValue += inputValue.slice(0, 3);
    }

    phoneInput.value = formattedValue;
}

function textAreaRegexp () {
    const regexpObject = /^[\s\S]{0,255}$/;
    let textArea = document.querySelector('#informacjeDodatkowe');
    if (!regexpObject.test(textArea.value)) {
        textArea.setCustomValidity('Wiadomość jest za długa, można podać maksymalnie 255 znaków!');
        textArea.reportValidity();
    } else {
        textArea.setCustomValidity('');
        textArea.reportValidity();
    }
}

window.addEventListener('DOMContentLoaded', event => {
    let todayDate = new Date().toISOString().split('T')[0];
    document.getElementById('dataOdbioru').setAttribute('min', todayDate);
    document.getElementById('dataOdbioru').setAttribute('value', todayDate);

    let today = new Date();
    let year = today.getFullYear();
    let month = (today.getMonth() + 1).toString().padStart(2, '0');
    let todayMonth = year + '-' + month;
    document.getElementById('dataWaznosci').setAttribute('min', todayMonth);
    document.getElementById('dataWaznosci').setAttribute('value', todayMonth);

    document.getElementById('numerTelefonu').addEventListener('input', formatPhoneInput);
    document.getElementById('informacjeDodatkowe').addEventListener('input', textAreaRegexp);
    document.getElementById('numerKarty').addEventListener('input', formatCardNumberInput);
    document.getElementById('cvv').addEventListener('input', formatCvvInput);
});

function koszykAction() {
    zapisz();
}

var myButton = document.getElementById("przyciskZlozZamowienie");
// Hide the button
myButton.style.visibility = "hidden";
function zamowienieAction() {
    let item = {};
    item.imieNazwisko = document.getElementById('imieNazwisko').value;
    item.email = document.getElementById('email').value;
    item.numerTelefonu = document.getElementById('numerTelefonu').value;
    let opcje = {};
    if (document.getElementById('opcja1').checked) {
        opcje.opcja1 = document.getElementById('opcja1').value;
    }
    if (document.getElementById('opcja2').checked) {
        opcje.opcja2 = document.getElementById('opcja2').value;
    }
    item.opcjeDodatkowe = [];
    item.opcjeDodatkowe.push(opcje);
    item.dataOdbioru = document.getElementById('dataOdbioru').value;
    if (document.getElementById('informacjeDodatkowe').value != "") {
        item.informacjeDodatkowe = document.getElementById('informacjeDodatkowe').value;
    }
    let karta = document.getElementsByName('karta');
    for (var i = 0; i < karta.length; i++) {
        if (karta[i].checked) {
            item.karta = karta[i].value;
        }
    }
    item.numerKarty = document.getElementById('numerKarty').value;
    item.dataWaznosci = document.getElementById('dataWaznosci').value;
    item.cvv = document.getElementById('cvv').value;

    let listaParsed = JSON.parse(localStorage.getItem('lista'));
    if (listaParsed === null || listaParsed.length === 0) {
        window.confirm('Koszyk jest pusty. Wysłanie zamówienia nie powiodło się!');
    }
    else {
        let suma = 0;
        for (let i = 0; i < listaParsed.length; i++) {
            suma += listaParsed[i].wartosc;
        }
       
        item.lista = listaParsed;

        let zamowienie = JSON.parse(localStorage.getItem('zamowienie'));
        zamowienie = [];
        zamowienie.push(item);
        localStorage.setItem('zamowienie', JSON.stringify(zamowienie));
        let zamowienieJsonString = JSON.stringify(zamowienie);
        var zgoda = window.confirm('Czy potwierdzasz zamówienie na kwotę: ' + suma + ' zł o następujących danych?\n' + zamowienieJsonString);
        if (zgoda) {
            // Show the button
            myButton.style.visibility = "visible";
        }
    }
}

function validateForm() {
    var imieNazwisko = document.getElementById("imieNazwisko").value;
    var email = document.getElementById("email").value;

    // Custom validation for Imię i Nazwisko
    var imieNazwiskoRegex = /^(?:[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*[- ]?){2,}$/;
    if (!imieNazwiskoRegex.test(imieNazwisko)) {
        alert("Podaj prawidłowe imię i nazwisko.");
        return false;
    }

    // Custom validation for Email
    var emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
    if (!emailRegex.test(email)) {
        alert("Podaj prawidłowy adres email.");
        return false;
    }

    return true; // Form is valid
}
