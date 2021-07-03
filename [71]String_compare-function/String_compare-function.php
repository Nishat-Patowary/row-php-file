<?php

echo strcmp("hello world","hello world");
echo strcmp("hello world","hello");
echo strcmp("hello world","hello world-wide");
echo strcmp("this is my home","this is his room");

//strcmp end-----------

echo strncmp("Hy nishat","Hy nishat",3);
echo strncmp("hy tanvir","Hy tanvir",3);
echo strncmp("hello world","hello world",11);

//strncmp end----------

echo strcasecmp("hello world","HELLO world");
echo strcasecmp("this is my home","this is my home");
echo strcasecmp("This is a cat","This is a cat with my home");
echo strcasecmp("This is a village","THIS is a home");

//strcasecmp end----------

echo strncasecmp("this is a cat","THIS is a cat",5);
echo strncasecmp("day world","night world",5);
echo strncasecmp("good morning","bad morning",5);

//strncasecmp end ------------

echo strnatcmp("hello world","hello world");
echo strnatcmp("4hello world","12hello world");
echo strnatcmp("4hello world","12hello WORLD");
echo strnatcmp("10hy nishat","2hy nishat");
echo strnatcmp("10hy nishat","-5hy nishat");

//strnatcmp end---------

echo strnatcasecmp("hello world","HELLO WORLD");
echo strnatcasecmp("5hello earth","10HELLO EARTH");
echo strnatcasecmp("2hy nishat","2HY NISHAT");

//strnatcasecmp end---------

echo substr_compare("the world","the world",0);
echo substr_compare("the earth","earth",4);
echo substr_compare("the man","the Man",4);
echo substr_compare("the bird in the sky","The bird in the sky",4,18);

//substr_compare end-------------


echo similar_text("this is my home","This is only me");
echo similar_text("hy nishat","hello niloy");
echo similar_text("welcome home","welcome hunny");


//similar_text end------------



?>