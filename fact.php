<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  Enter Number:  <input type="text" id="num">
<button onclick("fact()")>Fatctorial </button>
Answer: <button id="ans"></button>
$b=1;

  function fact()
  {
  $numb=Number(document.getElementById("num").value);
for($i=1;i<=numb;i++)
{
    $numb=$numb*i;

}
document.getElementById("ans").value=$numb;
  }
</body>
</html>