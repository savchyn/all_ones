<?php
function reptedarray($arr){
$temp_arr=array();
foreach($arr as $val){
if(!in_array($val,$temp_arr)){
$temp_arr[]=$val;
}
else{
echo "duplicate : ".$val."<br>";	
}

}

}

$array=array(1,2,3,3,5,5,6,7);
reptedarray($array);
?>
