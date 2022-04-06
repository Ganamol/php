
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
    $mark=30;
    if($mark>60)
    {
        echo('First division');
    }
    elseif($mark>49 && $mark<59)
    {
        echo('Second Division');
        }
    elseif($mark>33 && $mark<44)
    {
        echo('Third Division');
    }
else

{
    echo('Failed');
}
?>
</body>
</html>