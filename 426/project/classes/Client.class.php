<?php
    require_once("Connection.class.php");
    
    class Client extends Connection{
        public function getFAQ(){
            $sqlquery = "select * from faq where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getTeam(){
            $sqlquery = "select * from team where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getServices(){
            $sqlquery = "select * from services where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getSocialMedia(){
            $sqlquery = "select * from socialmedia where socialid = 1";
            return $this->connection->query($sqlquery);
        }

        public function getContact(){
            $sqlquery = "select * from contactus where contactid = 1";
            return $this->connection->query($sqlquery);
        }

        public function saveMessage($sendername, $phone, $email, $subject, $message){
            $sqlquery = "insert into messages (sendername, senderphone, senderemail, subject, message) values ('$sendername', '$phone', '$email', '$subject', '$message')";

            $this->connection->query($sqlquery);
        }

        public function getAllCategory(){
            $sqlquery = "select * from category where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getAllProducts(){
            $sqlquery = "select products.*, category.categoryname, category.classname from products join category on products.category = category.categoryid where products.status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getSingleProducts($productid){
            $sqlquery = "select products.*, category.categoryname, category.classname from products join category on products.category = category.categoryid where products.productid = $productid";
            return $this->connection->query($sqlquery);
        }

        public function getProductImages($productid){
            $sqlquery = "select * from productimages where productid = $productid";
            return $this->connection->query($sqlquery);
        }

        public function resumeUpload($name, $phone, $email, $qualification, $experience, $resumepath){
            $sqlquery = "insert into career (candidatename, phone, email, qualification, experience, resumepath) values ('$name', '$phone', '$email', '$qualification', '$experience', '$resumepath')";
            $this->connection->query($sqlquery);
        }

        public function getSlider(){
            $sqlquery = "select * from slider where status = 1";
            return $this->connection->query($sqlquery);
        }

        public function getMeta(){
            $sqlquery = "select * from meta where metaid = 1";
            return $this->connection->query($sqlquery);
        }

        public function getProductImage($productid){
            $sqlquery = "select * from productimages where productid = $productid";
            //echo $sqlquery;
            $result = $this->connection->query($sqlquery);
            //echo $result->num_rows;
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $imagepath = $row["imagepath"];
                    //echo "<hr>";
                    //print_r($row);
                    if($row["mainimage"] == 1){
                        //echo "True";
                        break;
                    }
                }

                return $imagepath;
            }else{
                return "default";
            }

        }
    }

    $client = new Client();
?>