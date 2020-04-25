<?php
$unit=$amount=$temp=" ";
fscanf(STDIN, "%d\n", $unit);
function below50($eunit)
{
    return $eunit*3.50;
}
function below150($eunit)
{
    return $eunit*4;
}
function below250($eunit)
{
    return $eunit*5.20;
}
function  above250($eunit)
{
    return $eunit*6.50;
}
if($unit<=50&&$unit>0)
{
   $amount=below50($unit);
}
else if($unit>50&&$unit<=150)
{
    $temp=$unit-50;
    $amount=below50(50)+below150($temp);
}
else if($unit>150&&$unit<=250)
{
    $temp=$unit-150;
    $amount=below50(50)+below150(100)+below250($temp);
}
else if($unit>250)
{
    $amount=above250($unit);
}
else
{
    echo "incorrect input";
}
echo $amount;
?>
$a = (int)readline('Enter an integer: ');