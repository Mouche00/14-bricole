
<script>
    let latlong = [];

    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0,
    };

    function success(pos) {
        const crd = pos.coords;

        // console.log(`${crd.latitude} ${crd.longitude}`);

        const latitude = crd.latitude;
        const longitude = crd.longitude;

        const reverseResult = reverseGeocode(latitude, longitude);

        reverseResult.then(data => {
            adress = data.display_name;
            console.log('Reverse Geocoding Result:', adress);
        });
    }

    function error(err) {
        console.warn(`ERROR(${err.code}): ${err.message}`);
    }

    async function reverseGeocode(lat, lon) {
        const apiUrl = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lon}&format=json`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();
            return data;
        } catch (error) {
            console.error('Error in reverse geocoding:', error);
        }
    }

    navigator.geolocation.getCurrentPosition(success, error, options);

</script>


{{-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Geolocation</title>
</head>
<body>

<p id="geoLocationText">Click the button for reverse geolocation:</p>

<button onclick="getLocation()">Show my location</button>
<div id="mapholder"></div>

<input id="latlng" type="text" value="40.714224,-73.961452">
<input type="button" value="Reverse Geocode" onclick="codeLatLng()">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
var x = document.getElementById("geoLocationText");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, showError, options);
        console.log('searching');
        x.innerHTML = "Searching";
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
   }
}

var options = {
    enableHighAccuracy: true,
    timeout: 10000,
    maximumAge: 0
};

function success(pos) {
    var crd = pos.coords;

    console.log('Your current position is:');
    console.log('Latitude : ' + crd.latitude);
    console.log('Longitude: ' + crd.longitude);
    console.log('More or less ' + crd.accuracy + ' meters.');

    var latlon = crd.latitude+","+crd.longitude;

    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&sensor=false";

    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
};

function error(err) {
    console.warn('ERROR(' + err.code + '): ' + err.message);
};

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            console.warn('ERROR(' + error.code + '): ' + error.message);
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            console.warn('ERROR(' + error.code + '): ' + error.message);
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            console.warn('ERROR(' + error.code + '): ' + error.message);
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            console.warn('ERROR(' + error.code + '): ' + error.message);
            x.innerHTML = "An unknown error occurred."
            break;
    }
}

function codeLatLng() {
    var geocoder = new google.maps.Geocoder();

    var input = document.getElementById("latlng").value;
    var latlngStr = input.split(",",2);
    var lat = parseFloat(latlngStr[0]);
    var lng = parseFloat(latlngStr[1]);
    var latlng = new google.maps.LatLng(lat, lng);

    geocoder.geocode({'latLng': latlng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                x.innerHTML = results[1].formatted_address;
                console.log(results[1].formatted_address);
                var latlon = lat+","+lng;
                var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
                +latlon+"&zoom=14&size=400x300&sensor=false";

                document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
            }
        } else {
            alert("Geocoder failed due to: " + status);
        }
    });
}
</script>

</body>
</html> --}}