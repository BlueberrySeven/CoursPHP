<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Affichage d'une pyramide</h1>
<form action="#" method="POST">
<label for="hauteur">hauteur pyramide</label>
<input type="number" name="hauteur">
<input type="submit" value="Envoye">

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