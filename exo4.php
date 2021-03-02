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
        $ChSaisi = $_POST["chiffre"];
        if($ChSaisi === $ChAlea){
            echo "Gagné !";
        } elseif($ChSaisi > $ChAlea || $ChSaisi < $ChAlea){
            echo "Perdu!";
        }
    } else {
        echo "Saisir un chiffre";
    }

    
?>

<?php 
    include("common/footer.php");
?>