<?php
class DB {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "legiony520";
    private $dbName = "oop";

    protected function connect() {
        
        try {
            $dsn ='mysql:host=' . $this->host . ';dbname='. $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        }
        catch (PDOException $e){
            throw new Exception($e->getMessage());
        }
        return $pdo;
    }
    
    
}
?>