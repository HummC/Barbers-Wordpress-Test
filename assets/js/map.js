

  function Map(latitude = 50.908, longitude = -1.4, zoom = 14) {
    this.latitude = latitude;
    this.longitude = longitude;
    this.zoom = zoom;

    let map = L.map("map");
    // Disable scrolling when not in focus
    map.scrollWheelZoom.disable();
    map.on('focus', function() { map.scrollWheelZoom.enable(); });
    map.on('blur', function() { map.scrollWheelZoom.disable(); });

    let attrib="Map data copyright OpenStreetMap contributors, Open Database License";
    L.tileLayer
    ("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
    { attribution: attrib } ).addTo(map);
    map.setView([this.latitude, this.longitude],  this.zoom);
    let mark = L.marker([this.latitude, this.longitude]).addTo(map);
    mark.bindPopup("Bootstrap Barbers").openPopup();
    }
Map();
