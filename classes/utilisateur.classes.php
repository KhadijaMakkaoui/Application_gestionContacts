<?
class Utilisateur{
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
    public function __construct($username,$password, $signUpDate, $lastLoginDate){
        $this->username =$username;
        $this->password =$password;
        $this->signUpDate =$signUpDate;
        $this->lastLoginDate =$lastLoginDate;
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

}
?>
