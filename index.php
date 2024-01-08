<?php
    class Movie {
        public $name;
        public $year;
        public $type;

        function __construct($_name, $_year, $_type)
        {
            $this->name = $_name; 
            $this->year = $_year; 
            $this->type = $_type; 

        }
        function printFullTitle() {
            return $this->name . ' ' . $this->year . ' ' . $this->type . ' ';
        }
    }

    $firstMovie = new Movie ('nowhere','2023','thriller');
    echo $firstMovie->printFullTitle();
    $secondMovie = new Movie ('le pagine della nostra vita', '2004','Romantico');
    echo $secondMovie->printFullTitle();
    $thirdMovie = new Movie ('Hich', '2005','commedia');
    echo $thirdMovie->printFullTitle();
    //var_dump($firstMovie,$secondMovie,$thirdMovie);

    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>