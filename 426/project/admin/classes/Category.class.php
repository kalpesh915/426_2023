<?php
    require_once("Connection.class.php");

    class Category extends Connection{
        public function addNewCategory($categoryname){
            // check for existance of categoryname
            $sqlquery = "select * from category where categoryname = '$categoryname'";
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return 0;
            }else{
                $sqlquery = "insert into category (categoryname) values ('$categoryname')";
                $this->connection->query($sqlquery);
                return 1;
            }
        }

        public function getAllCategory(){
            $sqlquery = "select * from category";
            return $this->connection->query($sqlquery);
        }

        public function getSingleCategory($categoryid){
            $sqlquery = "select * from category where categoryid = $categoryid";
            return $this->connection->query($sqlquery);
        }

        public function updateCategoryStatus($categoryid, $status){
            $sqlquery = "update category set status = $status where categoryid = $categoryid";
            $this->connection->query($sqlquery);
        }

        public function updateCategory($categoryid, $categoryname){
            $sqlquery = "select * from category where categoryname = '$categoryname'";
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return 0;
            }else{
                $sqlquery = "update category set categoryname = '$categoryname' where categoryid = $categoryid";
                $this->connection->query($sqlquery);
                return 1;
            }
        }
    }

    $category = new Category();
?>