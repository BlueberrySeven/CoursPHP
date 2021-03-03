<?php 
    include("common/header.php");
    include("common/menu.php");
    //Réaliser un tableau contenant les valeurs : 2,6,12,5,26,34,40,60
    //Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non
    //Afficher un message pour l'indiquer à l'utilisateur
    //Le tableau contient des valeurs impaires
?>

<h1>Résultat</h1>


<?php 
   //array
   $tbNb = [2,6,12,5,26,34,40,60];

   // fonction verification array
   function verifTab($tab){
       for ($i=0; $i < count($tab)-1; $i++) { 
           if ($tab[$i]%2 !== 0) {
               return false;
           }
       }
       return true;
   }

   //passer tnNb en argument
   if (verifTab($tbNb)) {
       echo "Ce tableau ne contient que des chiffres pairs";
   } else {
       echo "Ce tableau contient des chiffres impairs";
   }
   
?>

<?php 
    include("common/footer.php");
?>