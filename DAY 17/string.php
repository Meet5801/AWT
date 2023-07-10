<?php
    $str = "apple's lab";
    $result = addslashes($str);
    echo $str."<br/>";
    echo $result;
    echo "<br/>"."<br/>"."<br/>";
    
    $str1 = "Meet,utkarsh,spandan";
    $result1 = explode(",",$str1);
    echo "<pre/>";
    print_r($result1);
    echo "<br/>"."<br/>"."<br/>";
    
    $implode = implode(" ",$result1);
    echo $implode;
    echo "<br/>"."<br/>"."<br/>";
    
    echo strpos("hello..... hi good morning","hi");
    echo "<br/>"."<br/>"."<br/>";

    echo strlen("hello.....");
    echo "<br/>"."<br/>"."<br/>";

    echo stripos("hello..... Hi good morning","hi");
    echo "<br/>"."<br/>"."<br/>";

    echo strrpos("hello..... hi good morning","hi");
    echo "<br/>"."<br/>"."<br/>";
    
    $htmlentity = "<h1>hello<h1>";
    htmlentities($htmlentity);
    echo $htmlentity; 
    
    html_entity_decode($htmlentity);
    echo $htmlentity;
    echo "<br/>"."<br/>"."<br/>";
    
    $text = "THIS IS A SIMPLE TEXT";
    echo lcfirst($text);
    echo "<br/>"."<br/>"."<br/>";

    $text1 = "this IS A SIMPLE TEXT";
    echo ucfirst($text);
    echo "<br/>"."<br/>"."<br/>";
    
    $psswrd = "Abc@123# ";
    echo md5($psswrd);
    echo "<br/>"."<br/>"."<br/>";

    $psswrd1 = "Abc@123#";
    echo sha1($psswrd1);
    echo "<br/>"."<br/>"."<br/>";

    $text2 = "      Abc@123# ";
    echo ltrim($text2);
    echo "<br/>"."<br/>"."<br/>";

    $text3 = "Abc@123#  Abc@123#";
    echo rtrim($text3);
    echo "<br/>"."<br/>"."<br/>";
    
    $text4 = "Abc@123#  Abc@123#";
    echo trim($text4);
    echo "<br/>"."<br/>"."<br/>";
    
    $text5="helloo";
    $text6="Good Morning";
    echo str_replace("Good",$text5,$text6);
    echo "<br/>"."<br/>"."<br/>";
    
    $amount = 1000000;
    $nformet = number_format($amount,2);
    echo $nformet;

?>