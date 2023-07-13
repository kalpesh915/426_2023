<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Demo{
            const GREETINGS = "Welcome to OOP";
            public function printer(){
                echo self::GREETINGS;
            }
        }

        $obj1 = new Demo();
        $obj1->printer();
        
    ?>
</body>
</html>