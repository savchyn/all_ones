<?php 

$var="Mahender";
$var1="Mahender";
echo "$var"."<br>";
echo '$var'.'<br>';
echo $var."<br>";
var_dump($var==$var1);
echo "<br>";
$height=7;
$spacing=$height -1; 
 $hashes=2; 
for ($i=0; $i<$height; $i++) 
{ 
    for ($j=$spacing; $j>0; $j--) 
    { 
        echo "&nbsp;&nbsp;"; 
    } 
    for ($k=0; $k<$hashes; $k++) 
    { 
        echo "#"; 
    } 
    $spacing--; 
    $hashes ++; 
   echo "<br/>"; 

}

echo "<br>";
for ($i=0; $i<=$height; $i++) 
{
if($i==2||$i==6||$i==4){

}
else{
echo str_repeat('*',$i);
echo "<br>";
}

}


?>
