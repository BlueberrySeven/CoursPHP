<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Cercle - Périmètre et Aire</h1>
<form action="#" method="POST">
<label for="rayon">Rayon d'un cercle</label><input type="number" name="rayon">
<label for="perimetre">Périmètre</label><input type="checkbox" id="perimetre" name="perimetre">
<label for="aire">Aire</label><input type="checkbox" id="aire" name="aire">
<input type="submit" value="Envoyer">

</form>

<?php 
    
    if (isset($_POST["hauteur"])){
        echo "La hauteur est de " . $_POST["hauteur"] . "<br/>";
        $motif= "";
        for( $i=0; $i <= $_POST["hauteur"]; $i++){
            $motif.= "xx";
            echo $motif . "<br/>" ;
        }
        for( $i=0; $i < $_POST["hauteur"]-1; $i++){
            $motif = substr($motif, 0, strlen($motif)-2);
            echo $motif . "<br/>" ;
        }
    }
    
?>

<?php 
    include("common/footer.php");
?>