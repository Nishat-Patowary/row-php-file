<?php
$friends=["shanto","shihab","ömer","uzzal"];

array_pop($friends);
echo "<pre>";
print_r($friends);
echo "</pre>";
?>

<?php
$bow=["mitu","payel","mim","kabbo"];
array_pop($bow);
echo "<pre>";
print_r($bow);
echo "</pre>";
?>


<?php
$names=["shanto","shihab","ömer"];
array_push($names,"uzzal");
echo "<pre>";
print_r($names);
echo "</pre>";
?>


<?php
$bow=["mitu","payel","mim"];
array_push($bow,"kabbo");
echo "<pre>";
print_r($bow);
echo "</pre>";
?>


<?php
$friends=["shanto","shihab","omer"];
array_push($friends,"uzzal","bishal","momin");
echo "<pre>";
print_r($friends);
echo "</pre>";
?>




<?php
$bow=["mitu","payel","mim"];
array_push($bow,"kabbo","sumaiya","sanjida");
echo "<pre>";
print_r($bow);
echo "</pre>";
?>