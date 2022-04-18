<?
class Contact extends database{
    //Properiétées
    private $id;
    private $name;
    private $phone;
    private $adresse;
    private $userId;
    /**
     * 
     * constructeur
     * @param string $name
     * @param string $phone
     * @param string $adresse
     * @param int $userId
     * */
    public function __construct($id,$name,$phone, $adresse, $userId){
        $this->id =$id;
        $this->name =$name;
        $this->phone =$phone;
        $this->adresse =$adresse;
        $this->userId =$userId;
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
    function getUserId(){
        return $this->userId;
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
   function setUserId($userId){
       $this->userId = $userId;
   }
   function AddContact(Contact $contact){
       $contact->insert("contacts",['id'=>$this->id,'name'=>$this->name,'phone'=>$this->phone,'adresse'=>$this->adresse,'userId'=>$this->userId]);

   }
   function UpdateContact(Contact $contact){
    $contact->update("contacts",['name'=>$this->name,'phone'=>$this->phone,'adresse'=>$this->adresse,'userId'=>$this->userId],$this->id);

}

}
?>
