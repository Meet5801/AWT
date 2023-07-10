<?php
$a = array("Meet","dhruv","divy","spandan","ukani");
echo "<pre>";
print_r($a);
echo "<br><br> Using count()..... ";
echo "<br><br> No of element in array: ".count($a);
echo "<br><br> using sort()...<br>";
echo "<pre>";
sort($a);
print_r($a);
echo "<br><br> Using array reverse()......<br>";
echo "<pre>";
print_r(array_reverse($a));
echo "<br><br> using list().......";
list($f1,$f2,$f3,$f4,$f5)=$a;
echo "<br> After sorting the fifth item in  list is :".$f5;
?>