<?
class database{
    private $dbName="contacts_db";
    private $host="localhost";
    private $username="root";
    private $password="";
    private $resultat;
    public $pdo_conn;
    function __construct(){
        $this->pdo_conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password );
    }
   
}
?>