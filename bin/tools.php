<?php

function imZoom($url, $stl1 = "800px",$stl2="100%",$txt="",$cr="©Duhnat") {
    // $url  : url de l'image
    // $stl1 : style de l'image dans la page
    // $stl2 : style dans le modal
    // txt   : text haut du modal
    // $cr   : copy right text
    /*echo "<a href = '#' onclick = \"setModal('$url', '$stl2','$txt');\">"
        ."\n<img src = '$url' alt = '$url' class ='w3-image block-center' style = 'width:$stl1;'>"
        ."\n</a>"
        ."\n<p class = 'w3-small w3-center margin0'>$cr</p>"
    ;
    */
    $str = <<<IM
        <a href = '#' onclick = "setModal('$url', '$stl2','$txt');">
        <img src = '$url' alt = '$url' class ='w3-image block-center' style = 'width:$stl1;'">
        </a>
        <p class = 'w3-small w3-center margin0'>$cr</p> 
IM;
    echo $str;
}



?>