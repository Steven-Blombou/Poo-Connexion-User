<?php

require_once('models/class/class_database.php');
require_once('models/class/class_user.php');


  $connexion = new Database('db5000303628.hosting-data.io', 'dbs296615', 'dbu526524', 'jXd)G9)8');
  $bdd = $connexion->PDOConnexion();

  $req = $bdd->prepare('SELECT * from user_poo');
      $req->execute();

      $req = $req->fetch();

      $username = $req['username'];
      $password_username = $req['password_username'];
      // $mail_username = $req['mail_username'];
      // $confirmation_token = $req['confirmation_token'];

      // $user = new User($username, $password_username);
      // $user->affiche();

      $user1 = new User('test', 'test');
      $user1->affiche();

$reqconnectuser = $user1->connectUser($bdd);
echo "connecté";


 ?>
