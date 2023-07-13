<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        class ParentClass{
            static function greetings(){
                echo "<hr> Welcome to world of OOP";
            }
        }

        class ChildClass{
            public function caller(){
                ParentClass::greetings();
            }
        }

        $obj1 = new ChildClass();
        $obj1->caller();
    ?>
</body>
</html>