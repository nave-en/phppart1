<?php
$n=$value=$pos=$nvalue=" ";
$n=(int)readline(" ");//size for input array
$arr=array();
for($i=0;$i<$n;$i++)
{
    $value=(int)readline();//input values for array
    $arr[$i]=$value;
}
$pos=(int)readline(" ");//size for removal array
$nvalue=(int)readline(" ");
array_splice($arr,$pos,0,$nvalue);
print_r($arr);
?>
