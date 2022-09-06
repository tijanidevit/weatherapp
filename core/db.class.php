<?php
    class DB {
        // mysql://bf104cf25a5a68:19b2d5eb@eu-cdbr-west-03.cleardb.net/heroku_a7e7b7a1a474428?reconnect=true

        
        // public $host = 'localhost';
        // public $dbname = 'aircast';
        // public $password = '';
        // public $username = 'root';

        
        public $host = 'eu-cdbr-west-03.cleardb.net';
        public $dbname = 'heroku_a7e7b7a1a474428';
        public $password = '19b2d5eb';
        public $username = 'bf104cf25a5a68';
        
        public $conn;

        function __construct(){
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                echo 'Error in database connection '. $ex->getMessage();
            }
        }
        function prep($query){
            return $this->conn->prepare($query);
        }
        function execute($query,$value){
            $query = $this->prep($query);
            return $query->execute($value);
        }
        function fetch($query,$value){
            $query = $this->prep($query);
            $query->execute($value);
            return $query->fetch();
        }
        function fetchAll($query,$value){
            $query = $this->prep($query);
            $query->execute($value);
            return $query->fetchAll();
        }
        function num_row($query,$value){
            $query = $this->prep($query);
            $query->execute($value);
            return $query->rowCount();
        }
    }
?>