<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Affichage des tables de multiplication</h1>

<?php 
    for ($i = 1; $i <= 10; $i++){
        echo $i . "x" . 3 . "=" . $i * 3 . "<br/>";
    }
?>

<?php 
    include("common/footer.php");
?>