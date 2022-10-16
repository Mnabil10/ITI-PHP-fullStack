<?php 
echo "HELLO PHP";
define("webname", "PhpTask");
echo "<br>";
echo webname;
echo "<br>";
print_r($_SERVER ['SERVER_NAME']);
echo "<br>";
print_r($_SERVER ['SERVER_ADDR']);
echo "<br>";
print_r($_SERVER ['SERVER_PORT']);
echo "<br>";
print_r($_SERVER ['SCRIPT_FILENAME']);
echo "<br>";
print_r($_SERVER ['SCRIPT_NAME']);
echo "<br>";
//for loop
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}
echo $a;
echo "<br>";
echo $b;
//////////////
echo "<br>";
//////////////
//while loop
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
echo $i; echo "<br>";
echo $num; echo "<br>";
/////////////////////////
//////////////////////////

//do...while
$i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo $i ; echo "<br>";
//Loop stopped at i = ?? // i=10
//******************************/
//foreach
$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}

/* Output Value is 1
Value is 2
Value is 3
Value is 4
Value is 5 */
//******************************/
//break
$i = 0;
         
         while( $i < 10) {
            $i++;
            if( $i == 3 )break;
         }
         echo $i ; echo "<br>";
//Loop stopped at i = ?? //i=3

//******************************/
//continue
$array = array( 1, 2, 3, 4, 5);
   echo  $array[2]; 
   echo "<br>";
   /* output is 3 */ 
   
foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}
// Output ?? 1,2,4,5 
/*output is Value is 1
Value is 2
Value is 4
Value is 5*/
//******************************/
/////////////////
//////////////////////
//SweitchCase 
 
$age =10;
$grade = $age - 6;

switch($age){
    case $age < 5:
        echo "Stay At Home";
        break;
        case $age == 5:
            echo "Go to Kindergarden";
            break;
            case $age > 5:
                echo "Go to grade : $grade";
                break;
}

?>