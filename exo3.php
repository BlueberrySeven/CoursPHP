<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Cercle - Périmètre et Aire</h1>
<form action="#" method="POST">
<label for="rayon">Rayon d'un cercle</label>
<input type="number" name="rayon" id="rayon"><br/>
<label for="perimetre">Périmètre</label>
<input type="checkbox" id="perimetre" name="perimetre" checked><br/>
<label for="aire">Aire</label>
<input type="checkbox" id="aire" name="aire" checked><br/>
<input type="submit" value="Envoyer">

</form>

<?php 
    
    // if (isset($_POST["rayon"])){
    //     echo "Le périmètre est de " . $_POST["rayon"]*2*pi(). "<br/>";
    //     echo "L'aire est de " . pi()*$_POST["rayon"]*$_POST["rayon"]. "<br/>";
    // }

    if(isset($_POST["rayon"]) && $_POST["rayon"] >0){
        $rayon = $_POST["rayon"];

        if(isset($_perimetre)){
            echo "Le périmètre est de " . $_POST["rayon"]*2*pi(). "cm" ."<br/>";
        }
        if(isset($_aire)){
            echo "L'aire est de " . pi()*$_POST["rayon"]*$_POST["rayon"]. "m2" . "<br/>";
        }
    } else {
        echo "Saisir une valeur";
    }
    
?>

<?php 
    include("common/footer.php");
?>