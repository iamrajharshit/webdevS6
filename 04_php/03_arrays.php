<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

//numeric arrays
$list=array(17,21,34,56,32);

    //accessing array
    echo "$list[0]";
    echo "$list[1]";
    echo "$list[2]";
    echo "$list[3]";
    echo "$list[4]";


    //associative array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);

$ages= array("abhi"=>45,"Raj"=>21,"Rahul"=>65);
var_dump($ages);
echo "<br>Abhi age is ".$ages['abhi']." old";

echo "<br>Raj age is ".$ages['Raj']. " old";

echo "<br>Rahul age is ".$ages['Rahul']." old";

//multi dem
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
  

$teams=array(
    array("T1","Raj","Rahul","vivek"),
    array("T1","kumar","karan","fauzia"),
    array("T1","kausthub","alden","sushant"),
);

echo "<br>".$teams[0][0]."includes ".$teams[0][1]." our programer ".$teams[0][2]." our presenter and ".$teams[0][3]."<br>";



// FUnctions dealing with Arrays

    //using unset()
$list = array(2,3,4,5);
unset($list[2]); //remove the element at index 2

    //using array_keys and array_values



    //using is_array and in_array




    // explode and implode






    

?>


</body>
</html>