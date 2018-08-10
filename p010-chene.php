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
          <?php imZoom("img/chene/couverture.jpg","190px","90%","Le scret du vieux chêne.","©Duhnat")?>
          <p class="w3-center">Couverture de l'album : <br>"Le secret du vieux chêne".</p>
        </div>

        <div class="w3-half margin0">
          <div style="margin-left:10px">
            <h2 class="w3-center w3-text-theme margin0" style="margin-top: -40px;">L'Aquarelle</h2>
            <h4 class="w3-center w3-text-theme">"Le secret du vieux chêne"</h4>
            <p>
              Grâce à une colombe, Lalie trouve la paix après un gros chagrin. Mais, quel est donc ce secret qui transforme mes peines en joies, en sérénité ? Sophrologie ? Méditation ?
              <br><br>
              Ici pour les plus jeunes (à partir de 6 ans), je m’inspire de mes nombreuses années d’entraînement en sophrologie caycédienne et plus récemment de méditation de pleine conscience, ainsi que des conférences et des écrits de Matthieu Ricard, Alexandre Jollien, Thich Nhat Han, Frédéric Lenoir, Christophe André pour les plus connus.
            </p>
            <br>

            <!-- image paysage-->
            <?php imZoom("img/chene/chene-p1.jpg","800px","100%","Le secret du vieux chêne.","©Duhnat")?>
            <!--
            <a href="#" onclick="setModal('img/chene/chene-p1.jpg', '800px','Le secret du vieux chêne.');">
              <img src="img/chene/chene-p1.jpg" alt="Duhnat" class="w3-image block-center" style="width:80%;">
            </a>
            <p class="w3-small w3-center margin0">©Duhnat</p>
            -->
            <br><br>
            <!-- image vélo-->
            <?php imZoom("img/chene/chene-p2.jpg","800px","100%","Le sceret du vieux chêne.")?>
            
            <br><br>
            <!-- image colombe-->
            <?php imZoom("img/chene/chene-p4.jpg","800px","100%","Le secret du vieux chêne.")?>
            <br><br>
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