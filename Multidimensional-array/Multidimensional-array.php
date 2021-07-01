<?php
$nishat=[
    ["this","is",500,"taka"],
    ["this","is",1000,"taka"],
    ["this","is",1500,"taka"],
    ["this","is",2000,"taka"],
];
echo "<pre>";
print_r($nishat);
echo "</pre>";

?>


<?php
$nishat=[
    ["this","is",500,"taka"],
    ["this","is",1000,"taka"],
    ["this","is",1500,"taka"],
    ["this","is",2000,"taka"],
];
echo $nishat[0][0] . " ";
echo $nishat[0][1]. " ";
echo $nishat[0][2]. " ";
echo $nishat[0][3]. "<br> ";


echo $nishat[1][0] . " ";
echo $nishat[1][1]. " ";
echo $nishat[1][2]. " ";
echo $nishat[1][3]. " <br>";

echo $nishat[2][0] . " ";
echo $nishat[2][1]. " ";
echo $nishat[2][2]. " ";
echo $nishat[2][3]. " <br>";

echo $nishat[3][0] . " ";
echo $nishat[3][1]. " ";
echo $nishat[3][2]. " ";
echo $nishat[3][3]. " <br>";

?>

<?php
$nishat=[
    ["this","is",500,"taka"],
    ["this","is",1000,"taka"],
    ["this","is",1500,"taka"],
    ["this","is",2000,"taka"],
];
for($row =0;$row <3;$row++){
    for($col=0;$col <3;$col++){
    }
    echo $nishat[$row][$col];

}
?>

<?php
$nishat=[
    ["this","is",500,"taka"],
    ["this","is",1000,"taka"],
    ["this","is",1500,"taka"],
    ["this","is",2000,"taka"],
];
foreach($nishat as $niloy){
    foreach($niloy as $niloys){
        echo $niloys;
    }
    echo "<br>";
}
?>


<?php
$nishat=[
    ["this","is",500,"taka"],
    ["this","is",1000,"taka"],
    ["this","is",1500,"taka"],
    ["this","is",2000,"taka"],
];
echo "<table border='2px';>";
foreach($nishat as $niloy){
    echo "<tr>";
    foreach($niloy as $niloys){
        echo "<td>$niloys</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>