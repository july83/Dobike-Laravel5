        function initMap() {
            var longitud = parseFloat(window.document.getElementById('coordenadas').dataset.long);
            var latitud = parseFloat(window.document.getElementById('coordenadas').dataset.lat);
            var myLatLng = {lat: latitud, lng: longitud};

            var contentString = '<div><img src=img/logomap.png /><p><b>Dobike</b>, mas que una tienda de bicis</p></div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP, 
                zoom: 15
            });
            
            
            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                title: 'Dobike'
            });
          
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
