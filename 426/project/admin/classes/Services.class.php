<?php
    require_once("Connection.class.php");

    class Services extends Connection{
        public function addNewService($title, $icon, $description){
            $sqlquery = "insert into services (title, icon, description) values ('$title', '$icon', '$description')";
            $this->connection->query($sqlquery);
        }

        public function getAllServices(){
            $sqlquery = "select * from services";
            return $this->connection->query($sqlquery); 
        }

        public function changeServiceStatus($status, $serviceid){
            $sqlquery = "update services set status = $status where serviceid = $serviceid";
            $this->connection->query($sqlquery);
        }

        public function getSingleService($serviceid){
            $sqlquery = "select * from services where serviceid = $serviceid";
            return $this->connection->query($sqlquery); 
        }

        public function updateService($serviceid, $title, $icon, $description){
            $sqlquery = "update services set title = '$title', icon = '$icon', description = '$description' where serviceid = $serviceid";
            $this->connection->query($sqlquery);
        }
    }

    $services = new Services();
?>