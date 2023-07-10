<?php
echo "the original array is :<br>";
$a = array("name5"=>"Meet","name4"=>"dhruv","name3"=>"divy","name2"=>"spandan","name1"=>"ukani");
echo "<pre>";
print_r($a);
echo "After sorting.....<br>";
ksort($a);
echo "<pre>";
print_r($a);
?>