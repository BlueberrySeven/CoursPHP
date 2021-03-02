<?php 
    include("common/header.php");
    include("common/menu.php");

    session_start();
    if(!isset($_SESSION['chAlea'])){
        $_SESSION['chAlea'] = rand(1,10);
    }
?>

<h1>Chiffre aléatoire</h1>
<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Réinitialiser">
</form>
<form action="#" method="POST">
    <label for="chiffre">Chiffre choisi</label>
    <input type="number" name="chiffre" id="chiffre">
    <input type="submit" value="Envoyer">

</form>

<?php 
    if(isset($_POST['reinit']) && $_POST['reinit'] === "yes"){
        $_SESSION['chAlea'] = rand(1,10);
    }
    $ChAlea = $_SESSION['chAlea'];

    if(isset($_POST["chiffre"]) && $_POST["chiffre"] > 0){
        $ChSaisi = (int)$_POST["chiffre"];
        if($ChSaisi === $ChAlea){
            echo "Gagné !";
        } else {
            if($ChAlea > $ChSaisi){
                echo "Le chiffre est plus grand";
            } else {
                echo "Le chiffre est plus petit";
            }
        }
    } else {
        echo "Saisir un chiffre";
    }

    
?>

<?php 
    include("common/footer.php");
?>