<?php
function name($b){
    $b="This is a home";
}
$nishat="This is a php";
name($nishat);
echo $nishat;
?>

<?php
function names($c){
    $c="This is a letter";
}
$niloy="This is a home";
names($niloy);
echo $niloy;
?>


<?php
function bishal(&$d){
    $d.="This is a homes";
}
$nishat="THis is a cow<br>";
bishal($nishat);
echo $nishat;
?>


<?php
function shihab(&$tamim){
    $tamim.="tomar jonno nilche tara";
}
$momin="THis is a php<br>";
shihab($momin);
echo $momin;
?>


<?php
function kabbo(&$ullash){
    $ullash.="tomar jonno";
}
$uddry="Tomar jonno milche";
kabbo($uddry);
echo $uddry;
?>