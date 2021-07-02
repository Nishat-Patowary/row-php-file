<?php

$animal="this is a bird.the bird is so beautiful";
echo strstr($animal,"bird");

$bird="the bird name is parrot.the parrot is so cute";
echo strstr($bird,"parrot",true);




$animal="this is a dog.the dog is so cute";
echo strchr($animal,"dog");

$animal="this is a cat.The cat is so cute";
echo strchr($animal,"cat",true);





$animal="this is lion.the lion is a king";
echo stristr($animal,"lion");

$animal="this is a Tiger.the tiger lives in a forest";
echo stristr($animal,"tiger");





$animal="this is a cow.The cow is so hungry";
echo strpbrk($animal,"o");

$animal="this is a cat.the cat is so hungry";
echo strpbrk($animal,"a");

$animal="this is a lion.the lion is so angry";
echo strpbrk($animal,"is");