<?php
$names=array('nishat','shanto','shihab','omer');
echo count($names);
echo "<br>";
?>

<?php
$name=array('nishat','shanto','shihab');
echo sizeof($name);
?>

<?php
$food=array(
    'fruits' => array('banana','mango','jackfood'),
    'vegitable' => array('peyaj','dheros','alu')

);
echo count($food);
?>

<?php
$games=array(
    'pc' => array('gta 5','fortnite','resident evil 8'),
    "mobile" =>array('pubg','coc','cod','ff')
);
echo count($games);
echo sizeof($games);
?>


<?php
$games=array(
    'pc' => array('gta 5','fortnite','resident evil 8'),
    "mobile" =>array('pubg','coc','cod','ff')
);
echo count($games,1);
echo sizeof($games,1);
?>

<?php
$games=array(
    'pc' =>array('gta-5','fortnite','resident-evil'),
    "phone" =>array('pubg','cod')
);
echo count($games,1);
echo sizeof($games['pc']);
echo count($games['phone']);
?>

<?php
$games=array(
    'pc' =>array('gta-5','fortnite','resident-evil'),

$nishat=count($games);
for($i=0; $i <$nishat; $i++){
    echo "$i";
}
?>