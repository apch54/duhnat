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
        <?php imZoom("img/nat_chapeau.jpg","180px","90%","Fake image","©Duhnat")?>
        <br>
        <p class="w3-center">La dame au chapeau rouge.<br> C'est ainsi qu'elle aime que les enfants l'appellent...</p> 
        
      </div>

      <!-- centre -->
      <div class="w3-half margin0">        
        <div style="margin-left:10px">
          <h2 class="w3-center w3-text-theme margin0" style="margin-top: -40px;">En construction</h2> 
          <h4 class="w3-center w3-text-theme">Sous titre</h4> 
          <p  class="w3-center">
            Page en construction <br><br> Blabla ...<br>...<br>...<br>...<br>...<br>          
          </p>
          <br> 

          
          <?php imZoom("img/fake/fake-450x175.jpg","400px","100%","Le scret du vieux chêne.","©Duhnat")?>
          <p>Un commentaire éventuel...<br>... <br></p>
          <br> 

          <?php imZoom("img/fake/fake-450x175.jpg","400px","100%","Le scret du vieux chêne.","©Duhnat")?>
          <p>Un commentaire éventuel...<br>... <br></p>
          <br> 
          
          <?php imZoom("img/fake/fake-450x175.jpg","400px","100%","Le scret du vieux chêne.","©Duhnat")?>
          <p>Un commentaire éventuel...<br>... <br></p>
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
