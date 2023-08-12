<?php
    require_once("Connection.class.php");

    class Messages extends Connection{
        public function getUnreadMessages(){
            $sqlquery = "select * from messages where status = 0";
            return $this->connection->query($sqlquery);
        }

        public function getAllMessages(){
            $sqlquery = "select * from messages";
            return $this->connection->query($sqlquery);
        }

        public function getSingleMessages($msgid){
            $sqlquery = "select * from messages where msgid = $msgid";
            return $this->connection->query($sqlquery);
        }

        public function deletMessages($msgid){
            $sqlquery = "delete from messages where msgid = $msgid";
            return $this->connection->query($sqlquery);
        }

        public function changeMessageStatus($messagesid){
            $sqlquery = "update messages set status = 1 where msgid = $messagesid";
            //echo $sqlquery;
            $this->connection->query($sqlquery);
        }

        public function deleteMessage($messagesid){
            $sqlquery = "delete from messages where msgid = $messagesid";
            $this->connection->query($sqlquery);
        }
    }

    $messages = new Messages();
?>