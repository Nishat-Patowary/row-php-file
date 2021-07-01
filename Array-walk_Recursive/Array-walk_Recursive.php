<?php
$color=array(
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "pink",
    "e" => "yellow"
);

array_walk($color, "nishat");

function nishat($value,$key){
echo "$key : $value <br>";
}

$color=array(
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "pink",
    "e" => "yellow"
);

array_walk($color,"myfunction");
function myfunction($value,$key){
    echo "$key : $value <br>";
}


$name=array(
    "1" => "nishat",
    "2" => "niloy",
    "3" => "lopa",
);

array_walk($name,"boths");
function boths($value,$key){
    echo "$key : $value <br>";
}

$brother=array(
    "1" => "nishat",
    "2" => "afsar",
    "3" => "nobo",
    "4" => "galib" 
);
array_walk($brother,"cousin","we are brothers");
function cousin($value,$key,$chill){
    echo "$key $chill $value <br>";
}


$work=array(
    "1" => "html",
    "2" => "css",
    "3" => "bootstrap",
    "4" => "jquery",
    "5" => "javascript"
);
array_walk($work,"design","website design with");
function design($value,$key,$des){
    echo "$key $des $value <br>";
}



$niloy=array("1" => "html","2" => "css");

$nishat=array(
    $niloy,
    "3" => "bootstrap",
    "4" => "jquery",
    "5" => "javascript"
);
array_walk_recursive($nishat,"profpolio","both are design with website");
function profpolio($value,$keys,$niloy){
    echo "$keys $niloy $value <br>";
}

























?>

