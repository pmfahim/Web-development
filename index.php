<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// variable
$color = "PM Fahim";
echo $color . "<br>";
$txt = "text";
echo "This is $txt";
$txt2 = "this is text two";
echo "this is text one," . $txt2 . "this is text three" . "<br>";

// variable addition
$x = 5;
$y = 10;
echo $x + $y;

// Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

// Class
class car {
    public $model = "TARJEN";
    public $color = "BLACK";

    public function getCarInformation(){
        return "model :" . $this->model . "color :" . $this->color;
    }
}
$car1 = new car();

echo $car1->getCarInformation();
// Constants
define("dbname", "database1");
echo dbname;

?>

</body>
</html>