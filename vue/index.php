<?php
require_once '../model/Form.php';

$form = new Form();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-4 mb-4">France, ses Adresses & ses Villes</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <?php echo $form->input('adresse', 'adresse', 'text', 'Adresse'); ?>
          </div>
          <div class="form-group">
            <?php echo $form->input('cp', 'cp', 'text', 'Code Postal'); ?>
          </div>
          <div class="form-group">
            <?php echo $form->input('ville', 'ville', 'text', 'Ville'); ?>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div id="map" style="width: 100%; height: 400px;"></div>
      </div>
    </div>
  </div>


  <script type="module" src="../public/js/MapHandler.js"></script>
  <script type="module" src="../public/js/App.js"></script>
</body>

</html>