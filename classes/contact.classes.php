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
     * @param string $name
     * @param string $phone
     * @param string $adresse
     * @param int $userName
     * */
    public function __construct($name,$email,$phone=null, $adresse=null, $userName){
        parent::__construct();
        $this->name =$name;
        $this->email =$email;
        $this->phone =$phone;
        $this->adresse =$adresse;
        $this->userName =$userName;
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
   function AddContact(){
       if($this->name!="" && $this->email!=""){
            $this->insert("contacts",['name'=>$this->name,'email'=>$this->email,'phone'=>$this->phone,'adresse'=>$this->adresse,'fk_username'=>$this->userName]);
            header("Location:contactList.php");
       }
        else
         header("Location:contactList.php?error_msg=Name field and Email field are required");
   }
   function UpdateContact($id){
    $this->update("contacts",['name'=>$this->name,'email'=>$this->email,'phone'=>$this->phone,'adresse'=>$this->adresse,'fk_username'=>$this->userName],"id=$id");
    header("Location:contactList.php");

}
function DeleteContact($id){
    $this->delete("contacts",$id);
    header("Location:contactList.php");
}

}
?>
