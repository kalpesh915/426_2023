<?php   
    require_once("Connection.class.php");

    class Data extends Connection{
        public function getCategoryCount(){
            $sqlquery = "select count(*) from category";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }

        public function getUnreadMessageCount(){
            $sqlquery = "select count(*) from messages where status = 0";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }

        public function getProductsCount(){
            $sqlquery = "select count(*) from products";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }

        public function getFAQCount(){
            $sqlquery = "select count(*) from faq";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }

        public function getSliderCount(){
            $sqlquery = "select count(*) from slider";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }

        public function getTeamCount(){
            $sqlquery = "select count(*) from team";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }

        public function getCareerCount(){
            $sqlquery = "select count(*) from career where status = 0";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }


        public function getServiceCount(){
            $sqlquery = "select count(*) from services";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $count = $row["count(*)"];
            }

            return $count;
        }

        public function getTopUnreadMessages(){
            $sqlquery = "select * from messages where status = 0  order by (msgid) desc limit 5";
            return $this->connection->query($sqlquery);
        }
    }

    $data = new Data();
?>