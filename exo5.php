<?php 
    include("common/header.php");
    include("common/menu.php");
    // session?
    // form pour saisir le nombre de notes
    // si par exemple 4 nb, affichage de 4 ligne dans lesquels on notera les nombres
    // calcul de la moyenne de ces notes
?>

<h1>Calculer une moyenne</h1>
<form action="#" method="POST">
    <label for="moyenne">Nombre de notes</label>
    <input type="number" name="nombre" id="nombre">
    <input type="submit" value="Ajouter">
</form>

<?php 

?>

<?php 
    include("common/footer.php");
?>