<?php
for($a=1;$a <=10;$a++){
    if($a ==5){
        continue;
    }
    echo $a . "<br>";
}
?>

<?php
for($a=1;$a <=20;$a++){
    if($a == 7){
        continue;
    }
    echo $a . "<br>";
}
?>

<?php
for($a=30;$a >=1;$a--){
    if($a ==12){
        continue;
    }
    echo $a . "<br>";
}
?>
//continue end


<?php
for($a=1;$a <=20;$a++){
    if($a ==15){
        break;
    }
    echo $a . "<br>";
}
?>

<?php
for($a=1;$a <=30;$a++){
    if($a == 20){
        break;
    }
    echo $a . "<br>";
}
?>

<?php
for($a=30;$a >=1;$a--){
    if($a ==11){
        break;
    }
    echo $a . "<br>";
}
?>

<?php
for($a=50;$a >=1;$a--){
    if($a==33){
        break;
    }
    echo $a . "<br>";
}
?>