<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Affichage des tables de multiplication</h1>
<form action="#" method="get">
<label for="table">table de multiplication</label>
<input type="number" name="table">
<input type="submit" value="Envoyer">

</form>

<?php 
    
    if (isset($_GET["table"])){
        echo "Table de multiplation" . $_GET["table"] . "<br/>";

        for ($i = 1; $i <= 10; $i++){
            echo $i . "x" . $_GET["table"] . "=" . $i * $_GET["table"] . "<br/>";
        }
    }
    
?>

<?php 
    include("common/footer.php");
?>