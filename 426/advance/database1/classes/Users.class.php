<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        // function for create new user
        public function addNewUser($fname, $lname, $city, $email, $upass, $phone){
            // check if the email address is registered or not
            $sqlquery = "select * from students where email = '$email'";

            // generating a result set
            $result = $this->connection->query($sqlquery);

            // check how many records in result set
            if($result->num_rows > 0){
                return 0;
            }else{
                $sqlquery = "insert into students (fname, lname, city, email, password, phone) values ('$fname', '$lname', '$city', '$email', '$upass', '$phone')";
                $this->connection->query($sqlquery);
                return 1;
            }
        }

        // function for login user
        public function loginProcess($email, $upass){
            $sqlquery = "select * from students where email = '$email' and password = '$upass'";
            //echo $sqlquery;
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return 1;
            }else{
                return 0;
            }
        }

        // function for get other users
        public function getOtherUsers($email){
            $sqlquery = "select * from students where email <> '$email'";
            $result = $this->connection->query($sqlquery);
            return $result;
        }

        // function for change password
        public function changePassword($email, $cpass, $npass){
            if($this->loginProcess($email, $cpass)){
                // password update query
                $sqlquery = "update students set password = '$npass' where email = '$email'";
                $this->connection->query($sqlquery);
                return 1;
            }else{
                return 0;
            }
        }

        // functoin for get current user
        public function getCurrentUser($email){
            $sqlquery = "select * from students where email = '$email'";
            $result = $this->connection->query($sqlquery);
            return $result;
        }   
        
        // get current profile
        public function getProfile($email){
            $sqlquery = "select fname, lname, city, phone from students where email = '$email'";
            $result = $this->connection->query($sqlquery);
            return $result;
        }

        // function for update data
        public function updateData($email, $fname, $lname, $city, $phone){
            $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', phone = '$phone' where email = '$email'";
            $this->connection->query($sqlquery);
        }

        // function for delete data
        public function deleteAccount($email){
            $sqlquery = "delete from students where email = '$email'";
            $this->connection->query($sqlquery);
        }
    }

    $users = new Users();
?>