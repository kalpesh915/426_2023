<?php
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        if(empty($_POST["name"])){
            $nameErr = "Name is Required";
        }else{
            $name = filterData($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-' ]$/", $name)){
                $nameErr = "Only Latters and space is allowed";
            }
        }

        if(empty($_POST["email"])){
            $emailErr = "Email is Required";
        }else{
            $email = filterData($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid Email address";
            }
        }
        
        if(empty($_POST["website"])){
            $websiteErr = "Website is Required";
        }else{
            $website = filterData($_POST["website"]);
            if(!filter_var($website, FILTER_VALIDATE_URL)){
                $websiteErr = "Invalid Website";
            }
        }
        
        if(empty($_POST["comment"])){
            $commentErr = "Comment is Required";
        }else{
            $comment = filterData($_POST["comment"]);
        }
        
        if(empty($_POST["gender"])){
            $genderErr = "Gender is Rerquired";
        }else{
            $gender = filterData($_POST["gender"]);
        }

        echo "<hr> Welcome $name Your Email Address is $email your website is $website and Your Comemnt is $comment, selected gender is $gender";
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
        <input type="text" name="name" placeholder="Enter Your Name"> <span style="color:red;"><?php echo $nameErr; ?></span> <br>
        <input type="text" name="email" placeholder="Enter Your Email"> <span style="color:red;"><?php echo $emailErr; ?></span><br>
        <input type="text" name="website" placeholder="Enter Your Website"> <span style="color:red;"><?php echo $websiteErr; ?></span><br>
        <textarea name="comment" row="5" cols="25" placeholder="Enter Comment"></textarea> <span style="color:red;"><?php echo $commentErr; ?></span><br>
        Select Gender
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <span style="color:red;"><?php echo $genderErr; ?></span><br>
        <input type="submit" value="send Data">
    </form>  
</body>
</html>