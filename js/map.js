mapboxgl.accessToken = 'pk.eyJ1IjoiY2hpbm9lbGN0bSIsImEiOiJjanhhazRnOGEwc252M3puMTk2empuMWo0In0.Nz9sUMpPCLcTv5VymZOWtw';

function test() {
    alert('Llama a la funcion');
}

function InsertMapPoint(x, y) {
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [x, y], // starting position
        zoom: 9 // starting zoom
    });
    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl());
    var element = document.createElement('div');
    element.className = 'marker';
    var marker = new mapboxgl.Marker(element)
        .setLngLat({
            lng: x,
            lat: y
        }).addTo(map);
};