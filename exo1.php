<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Affichage des tables de multiplication</h1>

<?php 
    //définition d'une constante
    define(NUMERO, 4);

    for ($i = 1; $i <= 10; $i++){
        echo $i . "x" . NUMERO . "=" . $i * NUMERO . "<br/>";
    }
?>

<?php 
    include("common/footer.php");
?>