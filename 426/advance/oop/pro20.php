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
        final class cannot be inherited
        final method cannot be overrided
    */ 
        final class ParentClass{
            final public function greetings(){
                echo "<hr> Good Morning";
            }
        }

        class ChildClass extends ParentClass{
            // overrided method of parent class
            public function greetings(){
                echo "<hr> Good Night";
            }
        }

        $obj1 = new ChildClass();
        $obj1->greetings();
    ?>
</body>
</html>