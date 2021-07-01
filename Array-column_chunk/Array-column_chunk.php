<?php

$name=array(
    array(
        "id" =>"1",
        "first-name" => "nishat",
        "last name" => "hq", 
    ),
    array(
        "id" =>"2",
        "first-name" => "shanto",
        "last name" => "mahmudul", 
    ),

    array(
        "id" =>"3",
        "first-name" => "shihab",
        "last name" => "vodka", 
    ),

    array(
        "id" =>"4",
        "first-name" => "omer",
        "last name" => "vaw", 
    )
    );

    $new=array_column($name,"first-name");

    echo "<pre>";
    print_r($new);
    echo "</pre>";
    
    
    $friends=array(
        array(
            "first-name" => "shanto",
            "friend-age" => "21",
            "friend-nickname" => "moda",
        ),

        array(
            "first-name" => "omer",
            "friend-age" => "22",
            "friend-nickname" => "slient",
        ),

        array(
            "first-name" => "shihab",
            "friend-age" => "20",
            "friend-nickname" => "moda",
        )
    );
$new=array_column($friends,"first-name","friend-age");
    echo "<pre>";
    print_r($new);
    echo "</pre>";


$cars=["bmw","lambo","ferari","marcedis","odi"];

$new=array_chunk($cars,2);
echo "<pre>";
print_r($new);
echo "</pre>";

$cars=["bmw","lambo","ferari","marcedis","odi"];

$new=array_chunk($cars,3);
echo "<pre>";
print_r($new);
echo "</pre>";


$friend=array(
    "shanto" => "21",
    "omer" => "20",
    "shihab" => "23",
    "nishat" => "21"
);

$new=array_chunk($friend,3,true);
echo "<pre>";
print_r($new);
echo "</pre>";

$friend=array(
    "shanto" => "21",
    "omer" => "20",
    "shihab" => "23",
    "nishat" => "21"
);

$new=array_chunk($friend,3);
echo "<pre>";
print_r($new);
echo "</pre>";


    ?>