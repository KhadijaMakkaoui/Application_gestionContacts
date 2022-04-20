<?php
class user extends Database{
    //Properiétées
    private $username;
    private $password;
    private $signUpDate;
    private $lastLoginDate;
    /**
     * 
     * constructeur
     * @param string $username
     * @param string $password
     * @param date $signUpDate
     * @param date $lastLoginDate
     * */
    public function __construct($username,$password=null, $signUpDate=null){
        parent::__construct();
        // try{
            // $this->pdo_conn = new PDO("mysql:host=localhost;dbname=contact_db", "root", "");
        // }
        // catch(PDOException $e){
        //     echo $e ->getMessage();
        // }

        $this->username =$username;
        $this->password =$password;
        $this->signUpDate =$signUpDate;
        // $this->lastLoginDate =date('Y-m-d');
    }
    //Methodes getters
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
    function getSignUpDate(){
        return $this->signUpDate;
    }
    function getLastLoginDate(){
        return $this->lastLoginDate;
    }
    //Methodes setters
    function setUsername($username){
        $this->username = $username;
    }
    function setPassword($password){
        $this->password = $password;
    }
    function setSignUpDate($signUpDate){
        $this->signUpDate =$signUpDate;
    }
   function setLastLoginDate($lastLoginDate){
       $this->lastLoginDate =$lastLoginDate;
   }
   function checkUserNamePass(){
    $res=$this->selectAll("utilisateurs","username='$this->username' AND password= '$this->password'");

    if($res){
          return true;
    }
    else{
        return false;
    }
   }
   function checkUserName(){
    $res=$this->selectAll("utilisateurs","username='$this->username'");
    
    if($res){
          return true;
    }
    else{
        return false;
    }
   }
   function getUserInfo(){
    $res=$this->selectAll("utilisateurs","username='$this->username'");
    return $res;
   }
   function logIn(){
        if($this->checkUserNamePass()){
            $_SESSION['username']=$this->username;
            $this->setLastLoginDate(date("Y-m-d H:i:s"));
            $this->update("utilisateurs",['lastLogin'=>$this->lastLoginDate],"username='$this->username'");
            header('Location: profile.php');
        }
        else
            header('Location: connexion.php?error_msg=Your username or password is incorrect');
   }
   function singnUp(){
    if($this->checkUserName()){
        header('Location: inscription.php?error_msg=This username already exists');
    }
    else{
        $this->insert("utilisateurs",['username'=>$this->username,'password'=>$this->password,'signupDate'=>date('Y-m-d'),'lastLogin'=>null]);
        header("Location:connexion.php");
    }

   }
   
}


?>
