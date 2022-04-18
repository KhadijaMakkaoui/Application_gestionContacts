<?
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
    public function __construct($username,$password, $signUpDate=null){
        parent::__construct();
        // try{
        //     $this->pdo_conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password );
        // }
        // catch(PDOException $e){
        //     echo $e ->getMessage();
        // }
        $this->username =$username;
        $this->password =$password;
        $this->signUpDate =$signUpDate;
        $this->lastLoginDate =$_SESSION['lastLoginDate'];
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
//    function setLastLoginDate($lastLoginDate){
//        $this->lastLoginDate =$lastLoginDate;
//    }
   function checkUserNamePass(){
    $res=$this->selectAll("utilisateurs",'username='.$this->username.'AND password='.$this->password);
    
    $arr=$res->fetch(PDO::FETCH_ASSOC);
    if(count($arr)==1){
          return true;
    }
    else{
        return false;
    }
   }
   function checkUserName(){
    $res=$this->selectAll("utilisateurs",'username='.$this->username);
    
    $arr=$res->fetch(PDO::FETCH_ASSOC);
    if(count($arr)==1){
          return true;
    }
    else{
        return false;
    }
   }
   function logIn(){
    if($this->checkUserNamePass()){
    //  header('Location: profile.php');
       echo "true";
    }
    else
    echo "false";

    // header('Location: connexion.php');

   }
   function singnUp(){
    if($this->checkUserName()){
        return "This username already exists";
    }
    else{
         $this->insert("utilisateurs",['username'=>$this->username,'password'=>$this->password,'lastLogin'=>$this->lastLogin,'signupDate'=>$this->signupDate]);
    }
   }
}
// $user=new Utilisateur($_POST['username'],$_POST['pass']);
// echo "hello";
?>
