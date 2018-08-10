<!DOCTYPE html>
<html>
  <title>Duhnat</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bin/w3.css">
  <!--<link rel="stylesheet" href="bin/w3-theme-black.css"> -->
  <link rel="stylesheet" href="bin/duhnat-theme.css">
  <link rel="stylesheet" href="bin/font-awesome.min.css">
  <script type="text/javascript" src="bin/tools.js"></script>
  <body id="myPage">
    <!-- essai -->
    <?php include_once("bin/tools.php") ?>
    <?php include("00-sidebar.php"); ?>
    <?php include("01-navbar.php"); ?>
    <?php include("02-bandeau.php"); ?>
    <?php include("06-modal.php") ?>

    <!-- artiste container -->
    <div class="w3-container" id="chene">
      <!--couverture -->
      <div class="w3-row">
        <br><br>

        <div class="w3-quarter">
          <?php imZoom("img/silence/couverture.jpg","180px","90%","Le scret du vieux chêne.","©Duhnat")?>
          <br>
          <p class="w3-center">La couverture de l'album :<br> "Le secret du silence".</p>          
        </div>

        <!-- centre -->
        <div class="w3-half margin0">
          <div style="margin-left:10px">
            <h2 class="w3-center w3-text-theme margin0" style="margin-top: -40px;">L'Aquarelle</h2>
            <h4 class="w3-center w3-text-theme">"Le secret du silence"</h4>
            <p class="w3-center">
              Page en construction <br><br> Blabla ...<br>...<br>...<br>...<br>...<br>
            </p>
            <br>
            
            <?php imZoom("img/fake/fake-450x175.jpg","800px","100%","Le scret du vieux chêne.","©Duhnat")?>
            <p>Un commentaire éventuel ...<br>... <br></p>
            <br>
            <?php imZoom("img/fake/fake-450x175.jpg","800px","100%","Le scret du vieux chêne.","©Duhnat")?>
            <p>Un commentaire éventuel ...<br>... <br></p>
            <br>
            
            <?php imZoom("img/fake/fake-450x175.jpg","800px","100%","Le scret du vieux chêne.","©Duhnat")?>
            <p>Un commentaire éventuel ...<br>... <br></p>
            <br>
          </div>
        </div>

        <!-- vide -->
        <div class="w3-quarter w3-center">
          <br>
        </div>

      </div>
    </div>
    
    <?php include("05-footer.php"); ?>
  </body>
</html>