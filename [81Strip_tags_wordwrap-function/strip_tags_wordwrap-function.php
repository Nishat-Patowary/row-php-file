<?php


$name="hello <b>world</b>,This is a <i>home</i>";
echo strip_tags($name)."<br>";

$name="hello <i>world</i>,hello <b>earth</b>";
echo strip_tags($name)."<br>";

$name="This is a <b>bird</b>,Its look so <i>beautiful</i>";
echo strip_tags($name)."<br>";

//-----------

$name="This is a <b>car</b>,Its look so <i>cool</i>";
echo strip_tags($name,"<b>")."<br>";

$name="This is a <b>Home</b>,this is a <i>car</i>";
echo strip_tags($name,"<i>")."<br>";

//strip_tags end-----------------


 $name="this world is so beauriful";
 echo wordwrap($name,4,"<br>",true)."<br>";

 $name="tanvirul Haque nishat";
 echo wordwrap($name,5,"<br>",true)."<br>";

 $name="This is a book";
 echo wordwrap($name,3,"<br>",true);

 //wordwrap end--------------


 
?>