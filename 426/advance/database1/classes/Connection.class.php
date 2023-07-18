<?php
    class Connection{
        // Required variables

        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "426dbms";

        // public connection
        public $connection = null;

        // connection constructor to connect with database
        public function __construct(){
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);
            if($this->connection->connect_error){
                die("Connection Failed ".$this->connection->connect_error);
            }
        }

        // function to filter user input
        public function filterData($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
?>