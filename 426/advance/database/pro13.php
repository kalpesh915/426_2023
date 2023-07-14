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

        $conenction = new mysqli($hostname, $username, $password, $database);

        if($conenction->connect_error){
            die("<hr> Error Connection Failed ".$conenction->connect_error);
        }

        // build a query 
        $sqlquery = "select * from students";

        // generating result
        $result = $conenction->query($sqlquery);

        // print table headers
        echo "<table border='1' align='center'><tr>
            <th>Roll Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>";

        // checking how many rows in resultset
        if($result->num_rows > 0){
            // fetch one by one data in $row as array format
            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[fname]</td>
                    <td>$row[lname]</td>
                    <td>$row[city]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                </tr>";
            }
        }else{
            echo "<tr>
                <th colspan='6'>No data found in table</th>
            </tr>";
        }

        echo "</table>";
    ?>
</body>
</html>