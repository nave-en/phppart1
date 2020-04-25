<?php
$input=readline("enter the input");
$length=strlen($input);
$find=readline("enter the word to match");
$position=strpos($input,$find);
echo "Stringlength:".$length."\nwordposition:".$position;
?>
