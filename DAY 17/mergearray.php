<?php 
$a=array(1,2,3,4,5);
echo "<pre>";
$b=array(6,7,8,9,10);
echo "<pre>";
echo "First array: ";
print_r($a);
echo "<br> second array: ";
print_r($b);
$ans = array_merge($a,$b);
echo "<br><br> After Merging ";

print_r($ans);
?>
