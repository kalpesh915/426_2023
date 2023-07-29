<?php
    require_once("Connection.class.php");

    class Social extends Connection{
        public function getSocialLinks(){
            $sqlquery = "select * from socialmedia where socialid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateSocilaMedia($facebook, $twitter, $instagram, $youtube, $linkedin, $snapchat){
            $sqlquery = "update socialmedia set facebook = '$facebook', twitter = '$twitter', instagram = '$instagram', youtube = '$youtube', linkedin = '$linkedin', snapchat = '$snapchat' where socialid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $social = new Social();
?>