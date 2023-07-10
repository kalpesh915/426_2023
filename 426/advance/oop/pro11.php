<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            example of private access modifier

            :: is known as scope resolution operator
        */ 

        class Student{
            private function greetings(){
                echo "Welcome to world with OOP";
            }
        }

        $obj1 = new Student();
        $obj1->greetings();
    ?>
</body>
</html>