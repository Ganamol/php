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
   $a=10;
   $b=5;
   $c=6;
   $largest;

if($a >= $b && $a >= $c) {
    $largest = $a;
}
else if ($b >= $a && $b >= $c) {
    $largest = $b;
}
else
 {
   $largest = $c;
}
echo($largest);
?>
</body>
</html>