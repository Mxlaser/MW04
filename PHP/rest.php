<?php
  /*$mydb=new PDO('mysql:host=localhost;dbname=MW04_drone_nikola;charset=utf8','nikola','snirlla');
  $req="Select nom, prenom from utilisateur";
  $reqpreparer=$mydb->prepare($req);
  $tableauDeDonnees=array();
  $reqpreparer->execute($tableauDeDonnees);
  $reponse=$reqpreparer->fetchAll(PDO::FETCH_ASSOC);
  print_r($reponse);
  $reqpreparer->closeCursor();*/

  if (isset($_GET['validForm'])){
    $pseudo=$_GET['pseudo'];
    $mdp=$_GET['mdp'];
    /*echo "le pseudo vaut ".$pseudo;
    echo "le mdp vaut ".$mdp;*/
    $mydb=new PDO('mysql:host=localhost;dbname=MW04_drone_nikola;charset=utf8','nikola','snirlla');
    $req="select * from utilisateur where pseudo=$pseudo";
    $reqpreparer=$mydb->prepare($req);
    $tableauDeDonnees=array();
    $reqpreparer->execute($tableauDeDonnees);
    $reponse=$reqpreparer->fetchAll(PDO::FETCH_ASSOC);
    print_r($reponse);
    $reqpreparer->closeCursor();
  }
?>
