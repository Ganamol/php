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
    $a=1;
    while($a<=10)
    {
        if($a==7)
        {
           break;

        }
        echo "the no is".$a."<br>";
        $a++;
    }
    ?>
</body>
</html>