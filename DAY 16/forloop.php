<?php
for($x=0; $x<=10; $x++){
    echo "the number is : $x <br>";
}

$colour = array("red","<br>","green","<br>","blue","<br>","Yellow");

foreach ($colour as $value){
    echo "$value";
}
echo "<br>";
$age = array("peater"=>"35","ben"=>"37","joe"=>"43");
foreach($age as $x => $val){
    echo "$x= $val<br>";
}