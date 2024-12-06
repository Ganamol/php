<?php
// $cars = array("Volvo", "BMW", "Toyota"); 

// foreach ($cars as $x) {
//   echo "$x <br>";
// }


// array_push($cars, "Ford");
// foreach ($cars as $x) {
//     echo "$x <br>";
//   }


// $car = array("b"=>"Ford", "m"=>"Mustang", "y"=>1964);

// foreach ($car as $x => $y) {
//   echo "$x: $y <br>";
// }

// $car["y"] = 2024;
// foreach ($car as $x => $y) {
//     echo "$x: $y <br>";
//   }
//   echo $car["m"];


$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
foreach ($numbers as $x) {
    echo "$x <br>";
  }

  rsort($numbers);
  foreach ($numbers as $x) {
    echo "$x <br>";
  }



  //multi
 
$fruits = array (
  array("Apple",22,18),
  array("Orange",15,13),
  array("Grape",5,2),
  array("Mango",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$fruits[$row][$col]."</li>";
  }
  echo "</ul>";
}

?>


