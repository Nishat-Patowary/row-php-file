<?php
$x=10;
function name(){
    global $x;
    echo "variable x inside function : $x<br>";

}
name();
echo "variable x outside function : $x<br>";

?>



<?php
$x=10;
$y=20;
function nishat(){
    global $x,$y;
    $x=$x + $y;
}
nishat();
echo $x;
?>




