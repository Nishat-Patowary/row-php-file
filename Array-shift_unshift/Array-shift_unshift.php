<?php
$names=["shanto","shihab","omer"];
array_shift($names);
echo "<pre>";
print_r($names);
echo "</pre>";
?>



<?php
$friends=["shanto","shihab","omer","uzzal"];
array_shift($friends);
echo "<pre>";
print_r($friends);
echo "</pre>";
?>


<?php
$college=["bishal","momin","sobuj","tamim","tanvir"];
array_shift($college);

echo "<pre>";
print_r($college);
echo "</pre>";
?>


<?php
$names=["shanto","shihab","omer"];
array_unshift($names,"uzzal");
echo "<pre>";
print_r($names);
echo "</pre>";
?>


<?php
$friends=["bishal","tanvir","sobuj"];
array_unshift($friends,"momin","kabbo");
echo "<pre>";
print_r($friends);
echo "</pre>";
?>


<?php
$closs=["shanto","shihab","omer"];
array_unshift($closs,"kabbo","bishal");
echo "<pre>";
print_r($closs);
echo "</pre>";
?>