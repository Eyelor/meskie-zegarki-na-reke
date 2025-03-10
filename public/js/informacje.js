function pobierzTresc(element) {
    fetch('txt/' + element + '.txt')
    .then(response => response.text())
    .then(data => {
        let tresc = document.getElementById('tresc');
        tresc.innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

window.addEventListener('DOMContentLoaded', function() {
    window.alert('To jest strona SPA, która używa interfejsu Fetch Api do asynchronicznego wczytywania treści na stronę z plików na serwerze. Dla pełnej funkcjonalności wymagany jest serwer lokanlny localhost lub serwer publiczny.');

    pobierzTresc('grafiki');

    document.getElementById('grafiki').addEventListener('click', function() {
        pobierzTresc('grafiki');
    });

    document.getElementById('narzedzia').addEventListener('click', function() {
        pobierzTresc('narzedzia');
    });

    document.getElementById('serwisy').addEventListener('click', function() {
        pobierzTresc('serwisy');
    });

    document.getElementById('szablony').addEventListener('click', function() {
        pobierzTresc('szablony');
    });
});
