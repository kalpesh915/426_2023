<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        public function loginProcess($email, $password){
            $sqlquery = "select * from adminlogin where email = '$email' and password = '$password'";

            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return 1;
            }else{
                return 0;
            }
        }

        // get user logs
        public function getuserLogs(){
            $sqlquery = "select * from logs order by logid desc";
            return $this->connection->query($sqlquery);
        }

        // get current profile details
        public function getProfile($email){
            $sqlquery = "select fname, lname from adminlogin where email = '$email'";
            return $this->connection->query($sqlquery);
        }

        // update process
        public function updateProcess($email, $fname, $lname){
            $sqlquery = "update adminlogin set fname = '$fname', lname = '$lname' where email = '$email'";
            $this->connection->query($sqlquery);
        }

        // change password
        public function changePassword($email, $cpass, $npass){
            if($this->loginProcess($email, $cpass)){
                // current password match
                $sqlquery = "update adminlogin set password = '$npass' where email = '$email'";
                $this->connection->query($sqlquery);
                return 1;
            }else{
                // current password does not match
                return 0;
            }
        }
    }

    $users = new Users();
?>