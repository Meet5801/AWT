<?php
class car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My Car Is A ".$this->color." ".$this->model."!";
    }
}
$mycar = new car("Black","Mustabng");
echo $mycar -> message();
echo "<br>";
$mycar = new car("Red","supra");
echo $mycar -> message();
?>
<!-- 

