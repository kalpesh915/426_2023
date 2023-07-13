<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        class StaticMethodDemo{
            public function __construct(){
                self::greetings(); // static method
            }

            static function greetings(){
                echo "<hr> Welcome to world of OOP";
            }
        }

        $obj1 = new StaticMethodDemo();
    ?>
</body>
</html>