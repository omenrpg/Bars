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
    var htmlTemplate = '<div class="panel panel-default">' +
        '<a href="#" data-bar-id="<%= id %>"><div class="panel-heading"> <%= name %>, <%= vicinity %></div></a>' +
        '</div>';
    var compiled = _.template(htmlTemplate);
    showSpinner();
    getGelocation();

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

    function getBars(position) {
        var data = {};
        if (position!== undefined && position.coords !== undefined) {
            data.position = position.coords.latitude+","+position.coords.longitude;
            map.setCenter({
                lat : position.coords.latitude,
                lng : position.coords.longitude
            });
        }
        $.ajax({
            url: 'http://public-bars.local:8080/app_dev.php/api/v1/bars',
            data: data,
            type: 'GET',
            dataType: 'json',
            crossDomain: true,
            contentType: "application/json",
            success: function (bars) {
                _.forEach(bars, function(bar){
                    transferBarsToMarkers(bar);
                    displayBar(bar);
                });

                var markerCluster = new MarkerClusterer(map, markers);
                $("a[data-bar-id]").on('click', menuBarClick);
                hideSpinner();
            },
        });
    };

    function transferBarsToMarkers(barObject) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(
                barObject.geometry.location.lat,
                barObject.geometry.location.lng
            ),
            barDetails: barObject
        });
        markers.push(marker);
    }

    function showSpinner() {
        $('#left').loading({ overlay: true,base: 0.6 });
    }

    function hideSpinner() {
        $('#left').loading('hide');
    }

    function displayBar(bar) {
        $(compiled(bar)).appendTo('#left');
    }

    function menuBarClick() {
        var barId = $(this).attr('data-bar-id');
        var marker = _.find(markers, function (m) {
            return m.barDetails.id === barId;
        });
        map.setCenter({
            lat : marker.barDetails.geometry.location.lat,
            lng : marker.barDetails.geometry.location.lng
        });
        map.setZoom(19);
    }
});
