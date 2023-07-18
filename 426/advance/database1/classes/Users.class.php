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
    }

    $users = new Users();
?>