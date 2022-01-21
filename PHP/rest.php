<?php
  /*$mydb=new PDO('mysql:host=localhost;dbname=MW04_drone_nikola;charset=utf8','nikola','snirlla');
  $req="Select nom, prenom from utilisateur";
  $reqpreparer=$mydb->prepare($req);
  $tableauDeDonnees=array();
  $reqpreparer->execute($tableauDeDonnees);
  $reponse=$reqpreparer->fetchAll(PDO::FETCH_ASSOC);
  print_r($reponse);
  $reqpreparer->closeCursor();*/

  if (isset($_POST['valider'])){
    $pseudo=$_POST['pseudo_Utilisateur'];
    $mdp=$_POST['mot_De_Passe_Utilisateur'];
  }

  $mydb=new PDO('mysql:host=localhost;dbname=MW04_drone_nikola;charset=utf8','nikola','snirlla');
  $req="select nom,prenom from utilisateur where pseudo='$pseudo' and mdp='$mdp'";
  $reqpreparer=$mydb->prepare($req);
  $tableauDeDonnees=array();
  $reqpreparer->execute($tableauDeDonnees);
  $reponse=$reqpreparer->fetchAll(PDO::FETCH_ASSOC);
  $reponse2=count($reponse);
  if($reponse2<1)
  {
    echo "Cet utilisateur n'existe pas !";
  }
  else {
    print_r($reponse);
  }
  //echo "Le pseudo vaut ".$pseudo;
  //echo " Le mdp vaut ".$mdp;
  $reqpreparer->closeCursor();
?>
