<?php
    require_once("Connection.class.php");
    class Career extends Connection{
        public function getNewJobApplications(){
            $sqlquery = "select * from career where status = 0";
            return $this->connection->query($sqlquery);
        }

        public function getSingleResume($resumeid){

            $sqlquery = "update career set status = 1 where resumeid = $resumeid";
            $this->connection->query($sqlquery);

            $sqlquery = "select * from career where resumeid = $resumeid";
            return $this->connection->query($sqlquery);
        }

        public function deleteResume($resumeid){
            $sqlquery = "select resumepath from career where resumeid = $resumeid";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                unlink($row["resumepath"]);
            }

            $sqlquery = "delete from career where resumeid = $resumeid";
            $this->connection->query($sqlquery);
        }
    }

    $career = new Career();
?>