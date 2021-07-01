<?php
$names=array('shanto','shihab','omer');

echo in_array('shanto',$names);
?>


<?php
$names=array('shanto','shihab','omer');
echo in_array('omer',$names);
?>

<?php
$names=array('shanto','shihab','omer');
echo in_array('kabbo',$names);
?>

<?php
$names=array('nishat','shanto','omer');
if( in_array('nishat',$names)){
    echo "find successfully";
}else{
    echo "find unsuccessfully";
}
?>


<?php
$names=array('shanto','shihab','omer');
if(in_array('kabbo',$names)){
    echo "find successfully";
}else{
    echo "find unsuccessfully";
}
?>

<?php
$nishat=array(array('shanto','shihab') , array('omer','hasan'));

if(in_array(array('shanto','shihab'),$nishat)){
    echo "find-successfully";
}else{
    echo "find-unsuccessfully";
}
?>

<?php
$nishat=array(array('shanto','shihab'), array('omer','hasan'));
if(array('shanto','shihab')){
    echo "This is true";
}else{
    echo "This is false";
}
?>


<?php
$name=array('shanto','shihab','omer');
echo array_search('shihab',$names);
?>

<?php
$names=array('shanto','shihab','omer','hasan');
echo array_search('hasan',$names);
?>


<?php
$names=array('a'=>'shanto','b'=>'shihab','c'=>'omer');
echo array_search('omer',$names);
?>

<?php
$names=array('a'=>'shanto','b'=>'shihab','c'=>'omer');
echo array_search('omer',$names);
?>