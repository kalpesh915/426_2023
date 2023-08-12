<?php
    require_once("Connection.class.php");

    class Slider extends Connection{
        public function addNewSlider($title, $description, $imagepath, $imgtype){
            $sqlquery = "insert into slider (title, description, imagepath, imagetype) values ('$title', '$description', '$imagepath', $imgtype)";
            $this->connection->query($sqlquery);
        }

        public function getAllSliders(){
            $sqlquery = "select * from slider";
            return $this->connection->query($sqlquery);
        }

        public function getSingleSliders($sliderid){
            $sqlquery = "select * from slider where sliderid = $sliderid";
            return $this->connection->query($sqlquery);
        }

        public function changeSliderStatus($sliderid, $status){
            $sqlquery = "update slider set status = $status where sliderid = $sliderid";
            $this->connection->query($sqlquery);
        }

        public function updateSlider($sliderid, $title, $description, $imagepath = null, $imgtype){
            if($imagepath == null){
                $sqlquery = "update slider set title = '$title', description = '$description', imagetype = $imgtype where sliderid = $sliderid";
            }else{
                $sqlquery = "update slider set title = '$title', description = '$description', imagepath = '$imagepath', imagetype = $imgtype where sliderid = $sliderid";
            }

            $this->connection->query($sqlquery);
        }

        public function deleteSlider($sliderid){
            $sqlquery = "select imagepath from slider where sliderid = $sliderid";

            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                unlink($row["imagepath"]);
            }

            $sqlquery = "delete from slider where sliderid = $sliderid";
            $this->connection->query($sqlquery);
        }
    }

    $slider = new Slider();
?>