<?php 
echo "<pre>";
print_r(($_GET));
echo "</pre>";

echo $_GET["age"];

/*-----------get used---------*/

echo "<pre>";
print_r(($_POST));
echo "</pre>";

echo $_POST["age"];

/*-----------post used---------*/

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_REQUEST["Name"];


