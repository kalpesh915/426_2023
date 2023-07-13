<?php
    namespace furniture;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        
        class Table{
            public function __construct(){
                echo "<hr> Table class of Furniture";
            }
        }

        namespace code;
        class Table{
            public function __construct(){
                echo "<hr> Table class of HTML Code";
            }
        }

        //$obj1 = new Table();
        use Furniture as fur;
        $obj1 = new fur\Table();
    ?>
</body>
</html>