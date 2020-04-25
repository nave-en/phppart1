<?php
$arr=array(array(1,"sam","joe"),array(2,"john","doe"),array(3,"mike","engel"),array(4,"chris","teller"),array(5,"jane","smith"));
printlastname($arr);
function printlastname($arr)
{
    $n=(int)readline();
    for($i=0;$i<$n;$i++)
    {
        echo $arr[$i][2]."\n";
    }
}
?>
