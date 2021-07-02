 <?php

 $name="tanvirul";
 echo strlen($name);
 
 $name="tanvirul nishat";
 echo strlen($name);

 $name="tanvirul haque nishat";
 echo strlen($name);




$name="tanvirul";
echo str_word_count($name);

$name="tanvirul haque";
echo str_word_count($name);

$name="tanvirul haque nishat";
echo str_word_count($name);



$name="farhan tanvir nishat";
$new=str_word_count($name,1);
echo "<pre>";
print_r($new);
echo "</pre>";

$name="this is a name";
$new=str_word_count($name,1);
echo "<pre>";
print_r($new);
echo "</pre>";






$name="this is a home.this home is so beautuful";
echo substr_count($name,"home");

$name="this is a home.this home is so beautuful";
echo substr_count($name,"is");

$name="this is a home.this home is so beautuful";
echo substr_count($name,"this");


$name="this hello world. hyhello home";
echo substr_count($name,"hello",4,15);

$name="this hello world. hyhello home";
echo substr_count($name,"hello",10,20);










 ?>