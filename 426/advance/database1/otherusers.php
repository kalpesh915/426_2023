<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require_once("cdn.php");
    ?>
</head>
<body>
    <?php
        require_once("menu.php");
    ?>

    <div class="container-fluid">
    <h1 class="bg-info text-center text-white p-4">Other Users</h1>
        <table class="table table-hover table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Serial No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    require_once("classes/Users.class.php");

                    $result = $users->getOtherUsers($email);

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
            </tbody>
        </table>
    </div>
</body>
</html>