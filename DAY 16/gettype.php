<?php
$x="123.abc";
echo "a=".$x;
echo "<br>type of a is " , gettype($x);
settype($x,"int");
echo "<br> after conversion a is ", gettype($x);
?>