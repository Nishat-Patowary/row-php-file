<?php


$name="This is 'my home'";
echo addslashes($name)."<br>";

$name="This is 'my friend' ";
echo addslashes($name)."<br>";

$name="This is 'my new car'";
echo addslashes($name)."<br>";

$animal="This is 'my car'";
echo addslashes($animal)."<br>";

//addshashes useing to save codes with database-----------

$name="Tanvirul 'Haque nishat'";
$new= addslashes($name);
echo stripslashes($new)."<br>";

$name="This is 'a car with my home'";
$new=addslashes($name);
echo stripslashes($new)."<br>";

$name="This is a 'beautiful girl'";
$new=addslashes($name);
echo stripslashes($new)."<br>";

//stripslashes used to reshow codes from database-----------


$name="This is a home";
$new=addcslashes($name,"h")."<br>";
echo $new;

$name="This is a cute cat";
$new=addcslashes($name,"ai")."<br>";
echo $new;

$name="This is my new car";
$new=addcslashes($name,"ai")."<br>";
echo $new;

//addcslashes end-----------


$name="Tanvirul 'Haque nishat'";
$new= addcslashes($name,"ai");
echo stripcslashes($new)."<br>";

$name="This is 'a /car with /my /home'";
$new=addslashes($name);
echo stripcslashes($name)."<br>";

$name="This is a 'beautiful girl'";
$new=addslashes($name);
echo stripslashes($new)."<br>";


