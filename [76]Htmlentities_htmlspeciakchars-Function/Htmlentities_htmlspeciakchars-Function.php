<?php


$name="This is my<b>'home'</b>";
echo htmlentities($name)."<br>";

$name="This a a 'bird' <b>with my home</b>";
echo htmlentities($name)."<br>";

$name="<a href=https://www.youtube.com/watch?v=oXX2SJKijig&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=6></a>"; 
echo htmlentities($name)."<br>";



//htmlentities----------


$name="<a href=https://www.youtube.com/watch?v=oXX2SJKijig&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=6></a>"; 
echo htmlentities($name,ENT_QUOTES)."<br>";

//ENT_QUOTES---------


$name="<a href=https://www.youtube.com/watch?v=oXX2SJKijig&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=6></a>"; 
echo htmlentities($name,ENT_NOQUOTES)."<br>";


//ENT_NOQUOTES--------










?>