<?php
class Contact extends database{
    //Properiétées
    private $id;
    private $name;
    private $email;
    private $phone;
    private $adresse;
    private $userName;
    /**
     * 
     * constructeur
     * */
    public function __construct(){
        parent::__construct();
    }
    //Methodes getters
    function getName(){
        return $this->name;
    }
    function getPhone(){
        return $this->phone;
    }
    function getAdresse(){
        return $this->adresse;
    }
    function getEmail(){
        return $this->email;
    }
    function getuserName(){
        return $this->userName;
    }
    //Methodes setters
    function setName($name){
        $this->name = $name;
    }
    function setPhone($phone){
        $this->phone = $phone;
    }
    function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    function setEmail($email){
        $this->email = $email;
    }
   function setuserName($userName){
       $this->userName = $userName;
   }

}
?>
