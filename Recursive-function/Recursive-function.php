<?php
function name($nishat){
    if($nishat <=10){
        echo "$nishat<br>";
        name($nishat + 1);
    }
}
name(1);
?>


<?php
function niloy($nishat){
    if($nishat <=20){
        echo "$nishat<br>";
        niloy($nishat+1);
    }

}
niloy(1);
?>

<?php
function nishat($name){
    if($name <=15){
        echo "$name<br>";
        nishat($name + 1);
    }
}
nishat(6);
?>


<?php
function names($nishat){
    if($nishat <=5){
        echo "$nishat<br>";
        names($nishat+1);
    }
}
names(3);
?>

<?php
function shanto($nishat){
    if($n==0){
        return 1;
    }else{
        return ($n * shanto($nishat - 1));
    }
    }

echo nishat(5);
?>
