/* myLoc.js */

var watchId = null;
var map = null;
var ourCoords =  {latitude: 47.624851, longitude: -122.52099};
var prevCoords = null;

window.onload = getMyLocation;

function getMyLocation() {
	if (navigator.geolocation) {

		navigator.geolocation.getCurrentPosition(displayLocation, displayError, {enableHighAccuracy: true, timeout:9000});

		var watchButton = document.getElementById("watch");
		watchButton.onclick = watchLocation;
		var clearWatchButton = document.getElementById("clearWatch");
		clearWatchButton.onclick = clearWatch;
	}
	else {
		alert("Oops, no geolocation support");
	}
}

function displayLocation(position) {
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;

	var div = document.getElementById("location");
	div.innerHTML = "You are at Latitude: " + latitude + ", Longitude: " + longitude;
	div.innerHTML += " (with " + position.coords.accuracy + " meters accuracy)";

	var km = computeDistance(position.coords, ourCoords);
	var distance = document.getElementById("distance");
	distance.innerHTML = "You are " + km + " km from the WickedlySmart HQ";

	if (map == null) {
		showMap(position.coords);
		prevCoords = position.coords;
	}
	else {
		var meters = computeDistance(position.coords, prevCoords) * 1000;
		if (meters > 20) {
			scrollMapToPosition(position.coords);
			prevCoords = position.coords;
		}
	}
}


// --------------------- Ready Bake ------------------
//
// Uses the Spherical Law of Cosines to find the distance
// between two lat/long points
//
function computeDistance(startCoords, destCoords) {
	var startLatRads = degreesToRadians(startCoords.latitude);
	var startLongRads = degreesToRadians(startCoords.longitude);
	var destLatRads = degreesToRadians(destCoords.latitude);
	var destLongRads = degreesToRadians(destCoords.longitude);

	var Radius = 6371; // radius of the Earth in km
	var distance = Math.acos(Math.sin(startLatRads) * Math.sin(destLatRads) + 
					Math.cos(startLatRads) * Math.cos(destLatRads) *
					Math.cos(startLongRads - destLongRads)) * Radius;

	return distance;
}

function degreesToRadians(degrees) {
	radians = (degrees * Math.PI)/180;
	return radians;
}

// ------------------ End Ready Bake -----------------

function showMap(coords) {
	var googleLatAndLong = new google.maps.LatLng(coords.latitude,  coords.longitude);
	var mapOptions = {zoom: 18,	center: new google.maps.LatLng(23.753334, -99.166826), mapTypeId: google.maps.MapTypeId.ROADMAP};
	var mapDiv = document.getElementById("map");
	map = new google.maps.Map(mapDiv, mapOptions);

	// add the user marker
	var title = "Your Location";
	var content = "Esto es: " + coords.latitude + ", " + coords.longitude;
	addMarker(map, googleLatAndLong, title, content);
	
	googleLatAndLong = new google.maps.LatLng(23.752789,-99.168179);
	addMarker(map, googleLatAndLong, "LABORATORIO DE ING. INDUSTRIAL", content);

	googleLatAndLong = new google.maps.LatLng(23.754566,-99.165531);
	addMarker(map, googleLatAndLong, "EDIF: ADMINISTRATIVO (DIRECCION)", content);

	googleLatAndLong = new google.maps.LatLng(23.752974, -99.168613);
	addMarker(map, googleLatAndLong, "LABORATORIO DE ING. EN SISTEMAS COMPUTACIONALES", content);

	googleLatAndLong = new google.maps.LatLng(23.753525, -99.166132);
	addMarker(map, googleLatAndLong, "EDIF. BIBLIOTECA", content);

	googleLatAndLong = new google.maps.LatLng(23.753790, -99.166593);
	addMarker(map, googleLatAndLong, "CAFETERIA AGUILAS REALES", content);

	googleLatAndLong = new google.maps.LatLng(23.753832, -99.168109);
	addMarker(map, googleLatAndLong, "LABORATORIO DE ING. ELECTRONICA", content);

	googleLatAndLong = new google.maps.LatLng(23.753470, -99.168490);
	addMarker(map, googleLatAndLong, "LABORATORIO DE ING. MECANICA", content);

	googleLatAndLong = new google.maps.LatLng(23.753151, -99.166292);
	addMarker(map, googleLatAndLong, "EXPLANADA", content);

/*
	// add the WickedlySmart HQ marker
	var wsLatLong = new google.maps.LatLng(
							ourCoords.latitude, 
							ourCoords.longitude);
	addMarker(map, wsLatLong, "WickedlySmart HQ", 
							"WickedlySmart HQ latitude: " + 
							ourCoords.latitude + 
							", longitude: " +
							ourCoords.longitude);
*/
}

function addMarker(map, latlong, title, content) {
	var markerOptions = {
		position: latlong,
		map: map,
		title: title,
		clickable: true
	};
	var marker = new google.maps.Marker(markerOptions);

	var infoWindowOptions = {
		content: content,
		position: latlong
	};

	var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

	google.maps.event.addListener(marker, 'click', function() {
		infoWindow.open(map);
	});
}


function displayError(error) {
	var errorTypes = {
		0: "Unknown error",
		1: "Permission denied",
		2: "Position is not available",
		3: "Request timeout"
	};
	var errorMessage = errorTypes[error.code];
	if (error.code == 0 || error.code == 2) {
		errorMessage = errorMessage + " " + error.message;
	}
	var div = document.getElementById("location");
	div.innerHTML = errorMessage;
}

//
// Code to watch the user's location
//
function watchLocation() {
	watchId = navigator.geolocation.watchPosition(displayLocation, displayError, {enableHighAccuracy: true, timeout:3000});
}

function scrollMapToPosition(coords) {
	var latitude = coords.latitude;
	var longitude = coords.longitude;

	var latlong = new google.maps.LatLng(latitude, longitude);
	map.panTo(latlong);

	// add the new marker
	addMarker(map, latlong, "Your new location", "You moved to: " + 
								latitude + ", " + longitude);
}

function clearWatch() {
	if (watchId) {
		navigator.geolocation.clearWatch(watchId);
		watchId = null;
	}
}


