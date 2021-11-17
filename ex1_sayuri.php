<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Vehicles {
    public $name;
    public $model;
    public $makeYear;
    public $color;
    public $fuelType;

    function __construct($name, $model, $makeYear, $color, $fuelType){
        $this ->name = $name;
        $this ->model = $model;
        $this ->makeYear = $makeYear;
        $this ->color = $color;
        $this ->fuelType = $fuelType;
    }
    function printMsg() {
        return "This vehicle is ".$this->name." and model of ".$this->model.".<br>";
    }
}

$var = new Vehicles("Mercedes-Benz", "A-class", "2021", "black", "gas");
echo $var->printMsg();

$var2 = new Vehicles("Audi", "A3", "2022", "black", "gas");
echo $var2->printMsg();

$var3 = new Vehicles("Honada", "Accord", "2022", "lightblue", "gas");
echo $var3->printMsg();


class Ship extends Vehicles {
    public $numberOfPeople;

    function __construct($name, $model, $makeYear, $color, $fuelType, $numberOfPeople){
        parent::__construct($name, $model, $makeYear, $color, $fuelType);
        $this->numberOfPeople = $numberOfPeople;
    }

    function printShip(){
        return "This ship is ".$this->name." made in ".$this->makeYear." and ".$this->numberOfPeople." people can ride at the same time. <br>";
    }
}
$var4 = new Ship("Pit-Road", "SPS23", "2021", "white", "gas", "300");
echo $var4->printShip();

$var5 = new Ship("Hasegawa", "30065", "2020", "white", "gas", "200");
echo $var5->printShip();

$var6 = new Ship("Trumpeter", "06734", "2022", "lightblue", "gas", "100");
echo $var6->printShip();



?>



</body>
</html>