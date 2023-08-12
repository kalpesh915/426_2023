<?php
    require_once("Connection.class.php");
    class Team extends Connection{
        public function addNewTeamMember($membername, $designation, $twitter, $facebook, $instagram, $linkedin, $imagepath){
            $sqlquery = "insert into team (membername, designation, twitter, facebook, instagram, linkedin, teamimage) values ('$membername', '$designation', '$twitter', '$facebook', '$instagram', '$linkedin', '$imagepath')";

            $this->connection->query($sqlquery);
        }

        public function getAllTeamMembers(){
            $sqlquery = "select * from team";
            return $this->connection->query($sqlquery);
        }

        public function getSingleTeamMember($teamid){
            $sqlquery = "select * from team where teamid = $teamid";
            return $this->connection->query($sqlquery);
        }

        public function changeTeamMemberStatus($teamid, $status){
            $sqlquery = "update team set status = $status where teamid = $teamid";
            $this->connection->query($sqlquery);
        }

        public function updateTeamMember($teamid, $membername, $designation, $twitter, $facebook, $instagram, $linkedin, $imagepath = null){
            if($imagepath == null){
                $sqlquery = "update team set membername = '$membername', designation = '$designation', twitter  = '$twitter', facebook = '$facebook', instagram = '$instagram', linkedin = '$linkedin' where teamid = $teamid";
                echo $sqlquery;
                $this->connection->query($sqlquery);
            }else{
                $sqlquery = "update team set membername = '$membername', designation = '$designation', twitter  = '$twitter', facebook = '$facebook', instagram = '$instagram', linkedin = '$linkedin', teamimage = '$imagepath' where teamid = $teamid";
                echo $sqlquery;
                $this->connection->query($sqlquery);
            }
        }

        public function deleteTeam($teamid){
            $sqlquery = "select teamimage from team where teamid = $teamid";

            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                unlink($row["imagepath"]);
            }

            $sqlquery = "delete from team where teamid = $teamid";
            $this->connection->query($sqlquery);
        }
    
    }

    $team = new Team();
?>