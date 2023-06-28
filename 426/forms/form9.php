<?php
    $name = $email = $website = $comment = $gender = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = filterData($_POST["name"]);
        $email = filterData($_POST["email"]);
        $website = filterData($_POST["website"]);
        $comment = filterData($_POST["comment"]);
        $gender = filterData($_POST["gender"]);
    }

    function filterData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        <input type="text" name="name" placeholder="Enter Your Name"> <br>
        <input type="email" name="email" placeholder="Enter Your Email"> <br>
        <input type="text" name="website" placeholder="Enter Your Website"> <br>
        <textarea name="comment" row="5" cols="25" placeholder="Enter Comment"></textarea> <br>
        Select Gender
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br>
        <input type="submit" value="send Data">
    </form>  
</body>
</html>