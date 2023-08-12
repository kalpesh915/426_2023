<?php 
    require_once("Connection.class.php");

    class Products extends Connection{
        public function addNewProduct($productname, $category, $description, $price, $material, $packaging, $batchno){
            $sqlquery = "insert into products (productname, category, description, price, material, packaging, batchno) values ('$productname', $category, '$description', $price, '$material', '$packaging', '$batchno')";

            $this->connection->query($sqlquery);

            return $this->connection->insert_id; /// id of newly insertrd product
        }

        public function getAllCategory(){
            $sqlquery = "select * from category";
            return $this->connection->query($sqlquery);
        }

        public function addProductImages($productid, $imagepath){
            $sqlquery = "insert into productimages (productid, imagepath) values ($productid, '$imagepath')";
            $this->connection->query($sqlquery);
        }

        public function getAllProducts(){
            $sqlquery = "select products.*, category.categoryname from products join category on products.category = category.categoryid";
            return $this->connection->query($sqlquery);
        }

        public function changeProductStatus($productid, $status){
            $sqlquery = "update products set status = $status where productid = $productid";
            $this->connection->query($sqlquery);
        }

        public function getSingleProduct($productid){
            $sqlquery = "select * from products where productid = $productid";
            return $this->connection->query($sqlquery);
        }

        public function getProductImages($productid){
            $sqlquery = "select * from productimages where productid = $productid";
            return $this->connection->query($sqlquery);
        }

        public function makeMainImage($productid, $imageid){
            //  make all the images to default
            $sqlquery = "update productimages set mainimage = 0 where productid = $productid";
            $this->connection->query($sqlquery);
            //echo $sqlquery;
            //  mark as main images
            $sqlquery = "update productimages set mainimage = 1 where imageid = $imageid";
            $this->connection->query($sqlquery);
        }

        public function deleteProduct($productid){
            $sqlquery = "select imagepath from productimages where productid = $productid";

            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                unlink($row["imagepath"]);
            }

            $sqlquery = "delete from products where productid = $productid";
            $this->connection->query($sqlquery);
        }

        public function deleteProductImage($imageid){
            $sqlquery = "select imagepath from productimages where imageid = $imageid";
            //echo $sqlquery;
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                //echo $row["imagepath"];
                unlink($row["imagepath"]);
            }

            $sqlquery = "delete from productimages where imageid = $imageid";
            $this->connection->query($sqlquery);
        }

        public function updateProduct($productid, $productname, $category, $description, $price, $material, $packaging, $batchno){
            $sqlquery = "update products set productname = '$productname', category = $category, description = '$description', price = $price, material = '$material', packaging = '$packaging', batchno = '$batchno' where productid = $productid";

            $this->connection->query($sqlquery);
        }
    }

    $products = new Products();
?>