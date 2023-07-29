<?php
    require_once("Connection.class.php");

    class Meta extends Connection{
        // get meta data
        public function getMetaData(){
            $sqlquery = "select * from meta where metaid = 1";
            return $this->connection->query($sqlquery);
        }

        // update meta
        public function updateMeta($description, $keywords){
            $sqlquery = "update meta set description = '$description', keywords = '$keywords' where metaid = 1";
            $this->connection->query($sqlquery);
        }
        
    }

    $meta = new Meta();
?>