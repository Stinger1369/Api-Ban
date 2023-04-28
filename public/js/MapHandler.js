export default class MapHandler {
  constructor() {
    this.map = null;
    this.marker = null;
  }

  initMap(lat, lng) {
    // Crée un objet LatLng avec les coordonnées
    const coordinates = new L.LatLng(lat, lng);

    // Initialise la carte
    this.map = L.map("map").setView(coordinates, 15);

    // Ajoute un calque cartographique
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(this.map);

    // Ajoute un marqueur
    this.marker = L.marker(coordinates).addTo(this.map);
  }

  updateMap(lat, lng) {
    const coordinates = new L.LatLng(lat, lng);
    this.map.setView(coordinates, 15);
    this.marker.setLatLng(coordinates);
  }
}
