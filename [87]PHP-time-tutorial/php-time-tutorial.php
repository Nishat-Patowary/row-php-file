<?php 

echo "hour is " . date("h") . "<br>";
echo "hour is " . date("H") . "<br>";

echo "minite is " .date("i") . "<br>";
echo "minite is " .date("i") ."<br>";

echo "seconds is " .date("s") . "<br>";
echo "seconds is ". date("s") . "<br>";

echo "am-pm is "  .date("a") . "<br>";
echo "am-pm is " .date("A") . "<br>";


echo "Time is " . date("i:s:h") . "<br>";
echo "Time is " . date("d-m-y-i:s:h") . "<br>";


date_default_timezone_set("	Asia/Dubai");
echo "Time is " . date("i:s:h") . "<br>";

?>