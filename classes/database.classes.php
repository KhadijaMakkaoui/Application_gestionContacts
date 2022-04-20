<?php
session_start();
class Database{
    private $dbName="contact_db";
    private $host="localhost";
    private $username="root";
    private $password="";
    private $pdo_conn;
    //Constructuer
    function __construct(){
        try{
            $this->pdo_conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password );
        }
        catch(PDOException $e){
            echo $e ->getMessage();
        }
    }
    /**
     * Permet l'insertion d'une ligne dans une table donnée
     * @param string $tableName
     * @param string $dataArr  contient le tableau associatif des donnée à inserer sous la form key=>value
     */
    function insert($tableName,$dataArr=array()){
        //implode permet de renvoyer les element du array séparer par une virgule
        $table_columns = implode(',', array_keys($dataArr));// Contient les keys
        $table_value = implode("','", $dataArr); //contient les valeurs

        $requete="INSERT INTO $tableName($table_columns) VALUES('$table_value')";
        //Retourne false ou PDOStatement
       $resultat = $this->pdo_conn->prepare($requete);
       //Ececuter l'instruction préparer
       $resultat->execute();
        //Exemple
        //      insert("utilisateurs",['id_u'=>2,'username'=>"Ahmed"]);
    }
     /**
     * Permet la modification d'une ligne dans une table donnée
     * @param string $tableName
     * @param string $dataArr  contient le tableau associatif des donnée à inserer sous la form key=>value
     */
    public function update($tableName,$dataArr=array(),$id){
        $arr = array();
        //Stocker les key et value dans un array
        foreach ($dataArr as $key => $value) {
            $arr[] = "$key = '$value'"; 
        }
        $requete="UPDATE  $tableName SET " . implode(',', $arr)." WHERE $id";
        $resultat = $this->pdo_conn->prepare($requete);
        $resultat->execute();
        //Exemple
        //  update("utilisateurs",['username'=>"da"],'id_u=2');
    }
     /**
     * Permet la suppression d'une ligne dans une table donnée
     * @param string $tableName
     * @param string $id  id d'element à supprimer
     */
    public function delete($tableName,$id){
        $requete="DELETE FROM $tableName WHERE id= $id ";
        $resultat = $this->pdo_conn->prepare($requete);
        $resultat->execute();
    }
    /**
     * Permet la selection de tous les colonne d'une table donnée
     * @param string $tableName
     * @param string $where 
     * @return array|false
     */
    public function selectAll($tableName,$where = null){
        $rows="*";
        if ($where != null) {
            $requete="SELECT $rows FROM $tableName WHERE $where";
        }else{
            $requete="SELECT $rows FROM $tableName";
        }
        $resultat = $this->pdo_conn->prepare($requete);
        $resultat->execute();
        $res = $resultat->fetchAll();
        return $res;
         //Exemple
        //  selectAll("utilisateurs",'id_u=2');
    }
}
?>