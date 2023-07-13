<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        class Student{
            public $fname;
            public $lname;
            public $city;
            public static $college = "Atmiya Institute of Advance Technology";
            
            public function __construct($fname, $lname, $city){
                $this->fname = $fname;
                $this->lname = $lname;
                $this->city = $city;
            }

            public function getData(){
                echo "<hr> Welcome $this->fname $this->lname to $this->city your Coloege is ".self::$college;
            }
        }

        $std1 = new Student("Harshil", "Khakhi", "Rajkot");
        $std2 = new Student("Jigar", "Vaghela", "Rajkot");
        $std3 = new Student("Nikhil", "Dobariya", "Rajkot");

        $std1->getData();
        $std2->getData();
        $std3->getData();

        Student::$college = "Atmiya University";

        $std1->getData();
        $std2->getData();
        $std3->getData();
    ?>
</body>
</html>