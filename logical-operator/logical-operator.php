<?php
$nishat=50;
if($nishat >=40 && $nishat <=55){
    echo "My name is nishat";
}
?>
<?php
$nishat=80;
if($nishat >=70 && $nishat <= 90){
    echo "This is true";
}
?>
<?php
$nishat=40;
if($nishat >=50 && $nishat <=45){
    echo "This is false";
}
?>
<?php
$nishat=20;
if($nishat >=15 && $nishat <=10){
    echo "This is false";
}
?>





<?php
$nishat=30;
if($nishat >=20 || $nishat <=40){
    echo "This is true";
}
?>
<?php
$nishat=90;
if($nishat >=50 || $nishat <=50){
    echo "This is true";
}
?>
<?php
$nishat=50;
if($nishat >=60 || $nishat <=40){
    echo "This is false";
}
?>
<?php
$nishat=40;
if($nishat >=50 || $nishat <=30){
    echo "This is false";
}
?>






<?php
$nishat=50;
if(!($nishat >= 40)){
    echo "This is false";
}
?>
<?php
$nishat=20;
if(!($nishat >=10)){
    echo "This is false";
}
?>
<?php
$nishat=60;
if(!($nishat >=70)){
    echo "This is true";
}
?>
<?php
$nishat=20;
if(!($nishat >=30)){
    echo "This is true";
}
?>






<?php
$nishat=10;
if($nishat >=5 xor $nishat <=20){
    echo "This is false";
}
?>
<?php
$nishat=20;
if($nishat >=30 xor $nishat <=10){
    echo "This is false";
}
?>
<?php
$nishat=30;
if($nishat >=20 xor $nishat <=10){
    echo "This is true";
}
?>
<?php
$nishat=50;
if($nishat >=60 xor $nishat <=70){
    echo "This is true";
}
?>
