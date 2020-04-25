<?php
$asize=$bsize=$value=" ";
$asize=(int)readline();
$bsize=(int)readline();
$arr=$brr=$ans=array();
for($i=0;$i<$asize;$i++)
{
    $value=(int)readline();
    $arr[$i]=$value;
}
for($i=0;$i<$bsize;$i++)
{
    $value=(int)readline();
    $brr[$i]=$value;
}
$ans= array_intersect($arr,$brr);
print_r($ans);
?>
