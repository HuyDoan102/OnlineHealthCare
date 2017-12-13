function initMap(callback) {
    var cluster = [];
    // tao 1 maps voi center, zoom va styles
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 16.0326902, lng: 108.2104015},
        zoom: 15,
        styles: [
        {
            "featureType": "poi.business",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "labels.text",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
        }]
    });

    if (callback) {
        callback(map);
    }
    var infoWindow = new google.maps.InfoWindow({map: map});
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            var service = new google.maps.places.PlacesService(map);
            var request = {
                location: pos,
                radius: 1000,
                type: ['pharmacy']
            };
            service.nearbySearch(request, function (results, status) {
                Array.prototype.forEach.call(results, function(markerElem) {
                    var name = markerElem.name;
                    var street = markerElem.vicinity;
                    var lat = markerElem.geometry.location.lat();
                    var lng = markerElem.geometry.location.lng();

                    var location = new google.maps.LatLng(
                        parseFloat(lat),
                        parseFloat(lng));
                    var infoPharmacy = new google.maps.InfoWindow;

                    var icon = {
                        url: "/images/pharmacy.png", // url
                        scaledSize: new google.maps.Size(15, 15), // scaled size
                        origin: new google.maps.Point(0, 0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    }

                    var pharmacy = new google.maps.Marker({
                        map: map,
                        position: location,
                        icon: icon,
                        animation: google.maps.Animation.BOUNCE
                    });

                    var contentString = '<h4><b>' + name + '</b></h4> <br>' + '<p>' + street + '</p>';
                    pharmacy.setMap(map);
                    cluster.push(pharmacy);

                    pharmacy.addListener('click', function() {
                        infoPharmacy.setContent(contentString);
                        infoPharmacy.open(map, pharmacy);
                    });


                });

            });


            var place = {
                url: "/images/places.png",
                size: new google.maps.Size(100, 100),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            var userMarker = new google.maps.Marker({
                position: pos,
                map: map,
                icon: place
            });

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);

        });
    }
}

