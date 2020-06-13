<?php
include('Cible.php');

if ( !empty($tableauCible )){
       $res = http_build_query($tableauCible);
          //REDIRECTion
        header("Location:listeCible_ajax.php?".$res);
 }else {

     echo '<script> location.href = "index.php"</script>' ;
 }

?>
