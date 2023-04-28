// Importez la classe MapHandler
import MapHandler from "./MapHandler.js";

// Créez une instance de MapHandler
const mapHandler = new MapHandler();

// Autocomplete pour l'adresse
$("#adresse").autocomplete({
  source: function (request, response) {
    $.ajax({
      url: "https://api-adresse.data.gouv.fr/search/",
      data: { q: request.term, limit: 15 },
      dataType: "json",
      success: function (data) {
        response(
          $.map(data.features, function (item) {
            return {
              label:
                item.properties.name +
                " - " +
                item.properties.postcode +
                " - " +
                item.properties.city,
              value: item.properties.name,
              postcode: item.properties.postcode,
              city: item.properties.city,
              lat: item.geometry.coordinates[1],
              lng: item.geometry.coordinates[0],
            };
          })
        );
      },
    });
  },
  select: function (event, ui) {
    $("#cp").val(ui.item.postcode);
    $("#ville").val(ui.item.city);
    if (!mapHandler.map) {
      mapHandler.initMap(ui.item.lat, ui.item.lng);
    } else {
      mapHandler.updateMap(ui.item.lat, ui.item.lng);
    }
  },
});
