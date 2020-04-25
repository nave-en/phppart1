<?php
$input=readline("enter the input");
$ans1=trim($input,"[0,1,2,3,4,5,6,7,8,9]");
$ans2=ltrim($input,"[0,1,2,3,4,5,6,7,8,9]");
$ans3=rtrim($input,"[0,1,2,3,4,5,6,7,8,9]");
echo $ans1;
echo "\n".$ans2;
echo"\n".$ans3;
?>
