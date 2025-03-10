function showLocation(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;

    const wspolrzedne = new google.maps.LatLng(latitude, longitude);

    let directionsService = new google.maps.DirectionsService();
    
    let opcjeMapy = {
        zoom: 10,
        center: wspolrzedne,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    let mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy);

    let request = {
        origin: wspolrzedne,
        destination: { lat: 51.2351784, lng: 22.5488406 },
        travelMode: 'DRIVING'
    };

    directionsService.route(request, function(response, status) {
        if (status == 'OK') {
            let directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(mapa);
            directionsRenderer.setDirections(response);

            let leg = response.routes[0].legs[0];
            const distance = leg.distance.text;
            const duration = leg.duration.text;

            let output = document.getElementById("geo");
            output.innerHTML = "<p>Twoja lokalizacja:</p>" + 
            "<p>Szerokość geograficzna: " + latitude + "</p>" + 
            "<p>Długość geograficzna: " + longitude + "</p>" + 
            "<p>Nasza lokalizacja:</p>" + 
            "<p>Szerokość geograficzna: " + request.destination.lat + "</p>" + 
            "<p>Długość geograficzna: " + request.destination.lng + "</p>" + 
            "<p>Dystans: " + distance + "</p>" + 
            "<p>Czas samochodem: " + duration + "</p>";
        }
        else {
            window.alert("Niepowodzenie. Status: " + status);
        }
    });
}

function errorHandler(error) {
    let output = document.getElementById("geo");
    switch (error.code) {
        case error.PERMISSION_DENIED:
            output.innerHTML = "Użytkownik nie udostępnił danych.";
            break;
        case error.POSITION_UNAVAILABLE:
            output.innerHTML = "Dane lokalizacyjne niedostępne.";
            break;
        case error.TIMEOUT:
            output.innerHTML = "Przekroczono czas żądania.";
            break;
        case error.UNKNOWN_ERROR:
            output.innerHTML = "Wystąpił nieznany błąd.";
            break;
    }
}

function getLocation() {
    if (navigator.geolocation) {
        let options = {timeout: 60000};
        navigator.geolocation.getCurrentPosition(
        showLocation,
        errorHandler,
        options);
    } else { 
        alert("Twoja przeglądarka nie wspiera geolokalizacji!");
    }
}
