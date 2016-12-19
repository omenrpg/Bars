$(document).ready(function () {
    var defaultPosition = {
        latitude: 54.3495717,
        longitude: 18.6522085
    };
    var center = new google.maps.LatLng(defaultPosition.latitude, defaultPosition.longitude);

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 13,
        center: center,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var markers = [];

    function getBars(position) {
        console.info('getBars', position);
        var data = {};
        if (position!== undefined && position.coords !== undefined) {
            data.position = position.coords.latitude+","+position.coords.longitude;
        }
        $.ajax({
            url: 'http://public-bars.local:8080/app_dev.php/api/v1/bars',
            data: data,
            type: 'GET',
            dataType: 'json',
            crossDomain: true,
            contentType: "application/json",
            success: function (barsObjects) {
                console.log("Success", barsObjects);
                _.forEach(barsObjects, function(barObject){
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(
                            barObject.geometry.location.lat,
                            barObject.geometry.location.lng
                        ),
                        barDetails: barObject
                    });
                    google.maps.event.addListener(marker, 'click', test);
                    markers.push(marker);
                });

                var options = {
                    imagePath: 'images/m'
                };

                var markerCluster = new MarkerClusterer(map, markers, options);
            },
        });
    };

    function getGelocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                setPosition,
                getBarsWithDefaultPosition
            );
        }
        else {
            getBarsWithDefaultPosition();
        }

        function setPosition(position) {
            getBars(position);
        }

        function getBarsWithDefaultPosition() {
            getBars();
        }

    }

    getGelocation();

    function test() {
        console.info(arguments, this);
    }
    // function initialize() {
    //     var center = new google.maps.LatLng(defaultPosition.latitude, defaultPosition.longitude);
    //
    //     var map = new google.maps.Map(document.getElementById('map-canvas'), {
    //         zoom: 13,
    //         center: center,
    //         mapTypeId: google.maps.MapTypeId.ROADMAP
    //     });
    //
    //     var markers = [];
    //     var marker = new google.maps.Marker({
    //         position: new google.maps.LatLng(51.5074, 0.1278)
    //     });
    //     markers.push(marker);
    //
    //     var options = {
    //         imagePath: 'images/m'
    //     };
    //
    //     var markerCluster = new MarkerClusterer(map, markers, options);
    // }
    //
    // google.maps.event.addDomListener(window, 'load', initialize);

    // google.maps.event.addDomListener(window, 'load', initialize);
    //
    // function initialize() {
    //     /* position Amsterdam */
    //     var latlng = new google.maps.LatLng(defaultPosition.latitude, defaultPosition.longitude);
    //
    //     var mapOptions = {
    //         center: latlng,
    //         scrollWheel: false,
    //         zoom: 13
    //     };
    //
    //     var marker = new google.maps.Marker({
    //         position: latlng,
    //         url: '/',
    //         animation: google.maps.Animation.DROP
    //     });
    //
    //     var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    //     marker.setMap(map);
    //
    // };

});
