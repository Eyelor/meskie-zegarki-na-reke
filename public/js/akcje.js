const apiKey = 'VPGUQNB52HDG6ZUB';

const stockSymbols = ['AAPL', 'FOSL', 'MOV'];

var ceny = document.getElementById('ceny');
var contetn = '';
var index = 0;

function getData() {
    stockSymbols.forEach(symbol => {
        const apiUrl = `https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=${symbol}&interval=1min&apikey=${apiKey}`;

        fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const latestDate = data['Meta Data']['3. Last Refreshed'];
            const latestHighPrice = parseFloat(data['Time Series (1min)'][latestDate]['2. high']);
            const latestLowPrice = parseFloat(data['Time Series (1min)'][latestDate]['3. low']);
            const latestClosePrice = parseFloat(data['Time Series (1min)'][latestDate]['4. close']);
            const volume = parseInt(data['Time Series (1min)'][latestDate]['5. volume']);

            index ++;
        
            if (index == 1) {
                contetn += '<table><tr><th>Ceny akcji spółek wraz z woluminem:</th></tr>';
            }
            
            contetn += `<tr><td>${symbol} - Ostatnia cena: ${latestClosePrice} $, Wolumin: ${volume} akcji, Średnia wartość obrotu w ciągu minuty: ${parseFloat(((latestHighPrice + latestLowPrice) / 2) * volume).toFixed(2)} $</td></tr>`;

            if (index == 3) {
                ceny.innerHTML = contetn + '</table>';
            }
        })
        .catch(error => {
            window.alert(`Jeżeli ceny akcji ${symbol} się nie odczytują całkiem lub częściowo, oznacza to, że przekroczono limit 5 requestów na minutę lub 500 na dzień. Aby rozwiązać ten problem developer musiałby zakupić klucz premium pod adresem: https://www.alphavantage.co/premium/, jednak developer jest studentem :). Dlatego proszę o cierpliwość, wystarczy poczekać minutę i nie klikać za dużo razy w ciągu dnia. Dziękuję za uwagę.`);
            
            console.error('Error:', error);

            contetn = '<button onclick="location.reload()">Odśwież</button>';
            ceny.innerHTML = contetn;
        });
    });
}

getData();

var intervalId = setInterval(function() {
    getData();
}, 60000);

setTimeout(function() {
    window.alert('Przerwano automatyczne odświeżanie co minutę po 10 minutach, aby nie obciążać API, gdyż używa klucza darmowego.');
    clearInterval(intervalId);
}, 600000);
