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
            call private function from public function
            :: is known as scope resolution operator
        */ 

        class Student{
            private function greetings(){
                echo "Welcome to world with OOP";
            }

            public function caller(){
                $this->greetings();
            }
        }

        $obj1 = new Student();
        $obj1->caller();
    ?>
</body>
</html>