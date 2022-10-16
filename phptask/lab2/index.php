<?php
//1-  Search for how to make \n work in browser.
//using nl2br() function.
echo nl2br( "Hello php \n welcome in our website");
echo "<br>";
//Search for 3 built-in function of a string.
$testString = "This is a test string";
echo str_repeat($testString,5); // repeat a string 
echo "<br>";
echo strrev($testString); // return revearse string
echo "<br>";
echo strtolower($testString); // lowercase character 
echo "<br>";
echo strtoupper($testString); // uppercase character
echo "<br>";

/*
3-  Write a PHP script to get the sum and avg of an indexed array
with value = 45 in index =1
with value = 12 in index =0
with value = 25 in index =3
with value = 10 in index =2
after that sort it in a reverse order (highest to lowest). 
*/
          $arr1 = [45, 12, 25, 10];
         $sum = array_sum($arr1);
         echo 'Sum array :'.$sum.'<br>';
         $avg = array_sum($arr1)/count($arr1);
         echo 'avg array :'.$avg.'<br>';


/*
4-  Write a PHP script to sort the following associative array :
array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
          */

$arr2 =array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
asort($arr2);
echo "ascending order sort by value: ";
echo "<br>";
foreach($arr2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
ksort($arr2);
echo "ascending order sort by Key: ";
echo "<br>";
foreach($arr2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
arsort($arr2);
echo "descending order sort by value: ";
echo "<br>";
foreach($arr2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
krsort($arr2);
krsort($arr2);
echo "descending order sort by Key: ";
echo "<br>";
foreach($arr2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }   

/////////////////////////////
/*5- Display the following array in an HTML table with Name, Email and Status table headers.
Specify PHP status with red color.
    $students = [
        ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
        ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
        ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
        ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
        ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
    ]; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px;
}

td {
    text-align: center;
}

tr:nth-child(even) {
    background-color: #eee;
}

th[scope="col"] {
    background-color: #696969;
    color: #fff;
}


caption {
    padding: 10px;
    color: red;
    font-size: larger;
}

table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
}
    </style>
</head>
<body>
   
    <?php
$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];
echo "<table><caption>PHP Task Lab2 Part5</caption><tr>
<th scope='col'>name</th>
<th scope='col'>email</th>",
"<th scope='col'>Status</th>
</tr>";

foreach($students as $std){
    if($std['status']=='PHP'){
        foreach($std as $key => $value){
        echo "
        <td style = 'color:red;'>".$value."</td>
        ";
        }
        echo "</tr>";

    }
     else {foreach($std as $key => $value){
        echo "
        <td>".$value."</td>
        ";
        
    }
    echo "</tr>";
}
}


?>
</body>
</html>