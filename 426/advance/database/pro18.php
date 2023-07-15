<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        ul{
            list-style-type:none;
            padding:0px;
            margin:0px;
            text-align:center;
        }

        ul li{
            float:left;
        }

        a{
            display:inline-block;
            padding:10px;
            text-decoration:none;
            border:1px solid gray;
        }

        a:hover{
            background-color:brown;
            color:white;
        }
    </style>
</head>
<body>

    <table border='1' align='center'>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>


    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426dbms";
        $pagesize = 10;
        $pages = 0;


        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("<hr> Error while connecting database server ".$connection->connect_error);
        }

        // count how many records in table
        $sqlquery = "select count(id) from students";
        $countresult = $connection->query($sqlquery);

        while($countrow = $countresult->fetch_assoc()){
            $count = $countrow["count(id)"];
        }

        //echo $count;

        $pages = ceil($count / $pagesize);
        //echo $pages;

        if(isset($_GET["page"])){
            $page = $_GET["page"];
        }else{
            $page = 0;
        }

        $sqlquery = "select * from students limit $pagesize offset ".($page * $pagesize);
        //echo $sqlquery;

        $result = $connection->query($sqlquery);

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

    ?>

    </table>

    <ul>
    <?php
        for($i=0; $i<$pages; $i++){
            echo "<li><a href='pro18.php?page=$i'>".($i+1)."</a></li>";
        }
    ?>
    </ul>
</body>
</html>