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


    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426dbms";

        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("<hr> Error while connecting database server ".$connection->connect_error);
        }

        //$sqlquery = "update students set email = 'sunny@gmail.com' where fname = 'sunny'";
        $sqlquery = "update students set email = 'sunny@gmail.com', lname = 'SATA', city = 'Surat' where fname = 'sunny'";
        $connection->query($sqlquery);
        echo "Total ".$connection->affected_rows." Records updated";
        $connection->close();
    ?>
</body>
</html>