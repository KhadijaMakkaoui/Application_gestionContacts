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
     * */
    public function __construct($username=null,$password=null, $signUpDate=null){
        parent::__construct();
        if(isset($_SESSION['username'])){
            $this->username =$_SESSION['username'];
        }else{
            $this->username =$username;
            $this->password =$password;
            $this->signUpDate =$signUpDate;
            $this->lastLoginDate =date('Y-m-d');
        }
        
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
   //Verifier l'existance du username
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
        if(empty($this->username) ||empty($this->password)){
            header('Location: inscription.php?error_msg=All fields are required');
        }
        else if($this->checkUserName()){
            header('Location: inscription.php?error_msg=This username already exists');
        }
        else{
            $this->insert("utilisateurs",['username'=>$this->username,'password'=>$this->password,'signupDate'=>date('Y-m-d'),'lastLogin'=>null]);
            header("Location:connexion.php");
        }

   }
   /**
    * permer d'ajouter un contact
    * @param string $nameC
    * @param string $emailC
    * @param string $phoneC
    * @param string $adresseC
    */
    
    function AddContactByUser($nameC,$emailC,$phoneC=null, $adresseC=null){
      
        if($nameC!="" && $emailC!=""){
            $this->insert("contacts",['name'=>$nameC,'email'=>$emailC,'phone'=>$phoneC,'adresse'=>$adresseC,'fk_username'=>$this->username]);
            header("Location:contactList.php");
        }
        else
        header("Location:contactList.php?error_msg=Name field and Email field are required");
    }
    /**
     * Permet de retourner la liste des contact de l'utilisateur connecté
     * @return array|false
     */
    function getContactList(){
        $res=$this->selectAll("contacts","fk_username='$this->username'");
        return $res;
    }
    /**
     * Permet de retourner un contact sélectionné de l'utilisateur connecté
     * @param string $id id de contact
     * @return array|false
     */
   function getContactById($id){
    $res=$this->selectAll("contacts","fk_username='$this->username' AND id=$id");
    return $res;
   }
   /**
     * Permet d'effectuer l'operation de modification sur le contact selectioné contact de l'utilisateur connecté
     * @param string $id id de contact
     * @param string $name nom du contact
     * @param string $email email du contact
     * @param string $phone tel du contact
     * @param string $adresse adresse du contact
     */
   function UpdateContact($id,$name,$email,$phone,$adresse){
        if($name!="" && $email!=""){
            $this->update("contacts",['name'=>$name,'email'=>$email,'phone'=>$phone,'adresse'=>$adresse,'fk_username'=>$this->username],"id=$id");
            header("Location:contactList.php");
        }
        else
            header("Location:edit.php?id=$id&error_msg=invalid inputs");
    }
    /**
     * Permet de d'effectuer l'operation de suppression sur un contact selectioné de l'utilisateur connecté
     * @param string $id id de contact
     */
    function DeleteContact($id){
        $this->delete("contacts",$id);
        header("Location:contactList.php");
    }

}


?>
