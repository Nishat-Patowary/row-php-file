<?php
$closs=['shihab','shanto','omer','syko'];
$college=['bishal','tamim'];

$new=array_replace($closs, $college);
echo "<pre>";
print_r($new);
echo "</pre>";
?>


<?php
$closs=['shihab','omer','shanto',2 =>'vaw'];
$college=['bishal','momin'];

$new=array_replace($closs,$college);
echo "<pre>";
print_r($new);
echo "</pre>";
?>


<?php
$closs=['shanto','shihab','omer','vaw'];
$college=['bishal','momin'];
$class=['tahsin','jahid','parvez'];

$new=array_replace($closs,$college,$class);
echo "<pre>";
print_r($new);
echo "</pre>";
?>


<?php
$nishat=array("a"=>array("red"),"b"=>array("green"),"c"=>array("green","pink"));
$shihab=array("a"=>array("yellow"),"b"=>array("skyblue"));

$new=array_replace_recursive($nishat,$shihab);
echo "<pre>";
print_r($new);
echo "</pre>";
?>