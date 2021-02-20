<?php 
    include("common/header.php");
    include("common/menu.php");

    $ChAlea = 7;
?>

<h1>Chiffre aléatoire</h1>
<form action="#" method="POST">
<label for="chiffre">Chiffre choisi</label>
<input type="number" name="chiffre" id="chiffre">
<input type="submit" value="Envoyer">

</form>

<?php 
    
    if(isset($_POST["chiffre"]) && $_POST["chiffre"] > 0){
        // echo " Voici le chiffre" . $_POST["chiffre"] ;
        if($_POST["chiffre"] == $ChAlea){
            echo "Gagné !";
        }
    } else {
        echo "Saisir un chiffre";
    }

    
?>

<?php 
    include("common/footer.php");
?>