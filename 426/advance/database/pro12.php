<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426dbms";

        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("<hr> Connection Failed ".$connection->connect_error);
        }

        // create a query
        $sqlquery = "select * from students";

        // execute a query and generate a resultset
        $result = $connection->query($sqlquery);

        //print_r($result);

        //  checking existnace of data
        if($result->num_rows > 0){
            // convert result set to associative array
            while($row = $result->fetch_assoc()){
                // print all the data array one by one
                print_r($row);
                echo "<hr>";
            }
        }else{
            echo "<hr>No data found in table<hr>";
        }

        $connection->close();
    ?>
</body>
</html>