

<?php
function Msg()
 {
  echo "Hello world!<br>";
}

Msg();


function add($a,$b)
{
  echo "add=".$a+$b."<br>";
  echo "sub=".$a-$b."<br>";
  echo "mul=".$a*$b."<br>";
  echo "div=".$a/$b."<br>";
}

add(2,4);



function sum($x,$y)
{
  $z=$x+$y;
  return $z;
}

echo "5+10=".sum(5,10)."<br>";




function sum1(&$value)
{
  $value += 5;

}
$num=2;
sum1($num);
echo "pass by ref=".$num;

?>

