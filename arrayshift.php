<?php
$n=$value=$pos=$dn=" ";
$n=(int)readline(" ");//size for input array
$arr=$darr=$ans=array();
for($i=0;$i<$n;$i++)
{
    $value=(int)readline();//input values for array
    $arr[$i]=$value;
}
$dn=(int)readline(" ");//size for removal array
for($i=0;$i<$dn;$i++)
{
    $value=(int)readline();//input for removal array
    $darr[$i]=$value;
}
print_r($darr);
for($i=0;$i<$dn;$i++)
{
    unset($arr[$darr[$i]]);
}
$arr=array_values($arr);
print_r($arr);
?>
