<?
class database{
    private $dbName="contact_db";
    private $host="localhost";
    private $username="root";
    private $password="";
    private $resultat;
    private $pdo_conn;
    function __construct(){
        try{
            $this->pdo_conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password );
        }
        catch(PDOException $e){
            echo $e ->getMessage();
        }
    }
    function insert($tableName,$dataArr=array()){
        //Récupérer 
        $table_columns = implode(',', array_keys($dataArr));
        $table_value = implode("','", $dataArr);

        $requete="INSERT INTO $tableName($table_columns) VALUES('$table_value')";

       $resultat = $this->pdo_conn->prepare($requete);
       $resultat->execute();
        //Exemple
        //      insert("utilisateurs",['id_u'=>2,'username'=>"Ahmed"]);

    }
   
}

?>