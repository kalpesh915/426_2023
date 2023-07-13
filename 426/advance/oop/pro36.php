<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $students = ["Aashita", "Ganga", "Vivek", "Jigar", "Sunny", "Kalpesh", "Nikhil", "sanket", "Harshil", "Naisargi", "priya"];


        class MyIterator implements Iterator {
            private $studentData = [];
            private $counter = 0;

            public function __construct($data){
                $this->studentData = array_values($data);
                $this->counter = 0;
            }

            public function current(){
                return $this->studentData[$this->counter];
            }

            public function key(){
                return $this->counter;
            }

            public function next(){
                $this->counter+=3;
            }

            public function rewind(){
                $this->counter = 0;
            }

            public function valid(){
                return $this->counter < count($this->studentData);
            }
        }

        function Printer(Iterable $studentData){
            foreach($studentData as $tmp){
                echo "<hr> Welcome $tmp";
            }
        }

        $obj = new MyIterator($students);
        Printer($obj);
    ?>
</body>
</html>