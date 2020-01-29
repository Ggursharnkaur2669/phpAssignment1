<?php
echo "<em>", "Gursharan kaur 8622669 Dated : 28.01.2020 ","<em>","<br><br>";
echo "Part 1 Numbers and Strings","<br><br>";

$Base = 5.1105; 
echo "Base = ".$Base, "<br>";
$Height=10;
echo "Height = ".$Height ,"<br>";

//Calculate Area
$Area = 1/2*($Base*$Height);
//rounded Area to 2 decimal places
$RoundedArea = Round($Area,2);
echo "The Area of the triangle is ".$RoundedArea, "<br><br>";

//---------------------------------------------------------//
$First_Name ="bill";
echo "First Name = ".$First_Name, "<br>";
$Last_Name="gates";
echo "Last Name = ".$Last_Name, "<br>";
define("MY_NAME", $First_Name." ".$Last_Name);
$name =strtoupper(MY_NAME);

echo "My first name is ","<strong>",$name,"<strong>";

//--------------------------------------------------------------//









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>