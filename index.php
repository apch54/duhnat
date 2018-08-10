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
    <div class="w3-container" id="team">
      
      <div class="w3-row">
        <div class="w3-quarter w3-center">
          <?php include("03-duhnat.php"); ?>
        </div>
        <div class="w3-threequarter">
          <div class="w3-margin">
            <h2 class="w3-center w3-text-theme">Quelle drôle d’artiste !</h2>
            <br>
            
            Quelques années d’école d’art, une quinzaine d’années de peinture ponctuée de multiples expositions ( régionales
            et parisiennes), et la voilà à nouveau sur les bancs de l’école en illustration jeunesse !
            
            <p class="w3-center">
              <i>
              «Je ne me suis jamais autant épanouie
              <br> qu’en créant la collection des secrets de Lalie».</i>
            </p>
            <p>
              L’artiste écrit pour les plus jeunes dans un souci de révéler chez eux la part d’altruisme et de bienveillance qui les habitent.
              Aussi, elle a dans sa boîte à outils une grande expérience en sophrologie et en méditation dont elle n’hésite pas
              à se servir dans un souci d’apaisement, de paix intérieure à développer dès le plus jeune âge.
              <br> <br>
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- technique de gauche -------------------------------------------->
    <div class="w3-row-padding w3-padding-32 w3-theme-d2 w3-round" id="work">
      <div class="w3-quarter">
        <h2>Une artiste</h2>
        <p>
          particulièrement polyvalente sur le plan technique. Maîtrisant tant l'aquarelle, l'acrylique, l'huile que le collage, elle est également l'auteur des textes de ses albums jeunesses.
        </p>
      </div>
      <!-- trois colonnes de droite -->
      <div class="w3-quarter">
        <div class="w3-card w3-white">
          <br>
          <a href="p010-chene.php" >
            <img src="img/chene/lalie.jpg"  class="w3-image block-center" style="width:60%;">
          </a>
          <p class="w3-small margin0 w3-center">©Duhnat</p>
          <div class="w3-container w3-center">
            <h3 class="w3-text-theme">Aquarelle</h3>
            <p>Une technique qu'elle affectionne pour la réalisation de ses albums jeunesses ; la fluidité de cette technique, souvent réhaussée au crayon de couleur, procure à ses illustrations toute la sérénité inhérente à l'évasion et à la plénitude de son jeune public.</p>
          </div>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-card w3-white">
          <br>
          <a href="p020-silence.php" >
            <img src="img/barbe_bleu/femme_bleue.jpg"  class="w3-image block-center" style="width:70%;">
          </a>
          <p class="w3-small margin0 w3-center">©Duhnat</p>
          <div class="w3-container w3-center">
            <h3 class="w3-text-theme">Acrylique et huile</h3>
            <p>Deux autres techniques mises en oeuvre par Duhnat. <br>...<br>...<br>...<br>...</p>
          </div>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-card w3-white">
          <br>
          <a href="p010-chene.php" >
            <img href="https://placeholder.com"><img src="http://via.placeholder.com/150x270"  class="w3-image block-center" style="width:70%;">
          </a>
          <p class="w3-small margin0 w3-center">©Duhnat</p>
          <div class="w3-container w3-center">
            <h3 class="w3-text-theme">En construction</h3>
            <p>Le texte du lien ... <br>...<br>...<br>...<br>...</p>
          </div>
        </div>
        
      </div>
      <?php include("05-footer.php"); ?>
    </body>
  </html>