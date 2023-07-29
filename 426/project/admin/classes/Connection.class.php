<?php
    class Connection {
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "project426";

        public $connection = null;

        public function __construct(){
            // creating database connection
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);
            if($this->connection->connect_error){
                die("<hr> Connection Failed ".$this->connection->connect_error);
            }
        }

        // filter Data
        public function filterData($data){
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
        }

        // log writer
        public function logWriter($email, $event){
            $sqlquery = "insert into logs (email, event) values ('$email', '$event')";
            $this->connection->query($sqlquery);
        }
    }
?>