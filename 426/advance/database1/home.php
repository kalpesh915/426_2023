<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php
        require_once("cdn.php");
    ?>
</head>
<body>
    <?php
        require_once("menu.php");
    ?>

    <div class="container-fluid">
        <?php
            require_once("classes/Users.class.php");

            $result = $users->getCurrentUser($email);

            while($row = $result->fetch_assoc()){
                $fname = $row["fname"];
                $lname = $row["lname"];
                $city = $row["city"];
                $phone = $row["phone"];
                $email = $row["email"];
            }
        ?>

        <table class="table table-hover table-striped">
            <tr>
                <th>First Name</th>
                <td><?php echo $fname; ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $lname; ?></td>
            </tr>
            <tr>
                <th>City</th>
                <td><?php echo $city; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $phone; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>