<?php
$name=array(
    "afsar" => "24",
    "nishat" => "21",
    "nobo" => "20"
);

$new=array_flip($name);
echo "<pre>";
print_r($new);
echo "</pre>";


$name=array(
    "lopa" => "24",
    "afsar" => "23",
    "nishat" => "21",
    "galib" => "20",
    "nobo" => "20",
    "noboni"=> "14",
    "niloy" => "13",
    "nirob" => "10",
    "mahmud" => "2",
);
$full=array_flip($name);
echo "<pre>";
print_r($full);
echo "</pre>";

$name=array(
    "lopa" => "24",
    "afsar" => "23",
    "nishat" => "21",
    "galib" => "20",
    "nobo" => "20",
    "noboni"=> "14",
    "niloy" => "13",
    "nirob" => "10",
    "mahmud" => "2",
);
$full=array_change_key_case($name,CASE_UPPER);
echo "<pre>";
print_r($full);
echo "</pre>";

$name=array(
    "lopa" => "24",
    "afsar" => "23",
    "nishat" => "21",
    "galib" => "20",
    "nobo" => "20",
    "noboni"=> "14",
    "niloy" => "13",
    "nirob" => "10",
    "mahmud" => "2",
);
$full=array_change_key_case($name,CASE_LOWER);
echo "<pre>";
print_r($full);
echo "</pre>";
?>

