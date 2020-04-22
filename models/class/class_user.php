<?php

class User {
  // Nos variables
  protected $_username;
  protected $_password_username;
  // protected $_mail_username;
  // protected $_confirmation_token;

    // Creation du constructeur
    public function __construct($_username, $_password_username){
      $this->_username = $_username;
      $this->_password_username = $_password_username;
      // $this->_mail_username = $_mail_username;
      // $this->_confirmation_token = $confirmation_token;
    }


      public function getusername(){
        return $this->_username;
      }

        public function getpassword_username(){
          return $this->_password_username;
        }

            // public function getmail_username(){
            //   return $this->_mail_username;
            // }

              // public function getconfirmation_token(){
              //   return $this->_confirmation_token;
              // }

                public function affiche() {
                  echo "Bonjour : ".$this->_username."<br>";
                  echo "Ton mot de passe est : ".$this->_password_username."<br><br>";
                  // echo "Votre mot de passe : ".$this->_mail_username."<br>";
                  // echo "Votre mot de passe : ".$this->_confirmation_token."<br><br>";
              }

                  // Fonction permettant de se connecter à la table user
                  public function connectUser($bdd) {
                    $username = $this->_username;
                    $password_user = $this->_password_username;
                    // $mail_username = $this->_mail_username;
                    // $confirmation_token = $this->_confirmation_token;
                    $connectuser = $bdd->prepare("SELECT * FROM user_poo WHERE username = '$username' AND password_username = '$password_username'");
                    $connectuser->execute();
                    return $connectuser->fetch();
                    $connectuser->closeCursor();
                  }

              }

 ?>
