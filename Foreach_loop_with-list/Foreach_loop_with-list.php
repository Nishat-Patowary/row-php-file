<?php
$buisness=[
    [1,"shanto","position",10000],
    [2,"shihab","position",15000],
    [3,"omer","position",20000],
    [4,"bishal","position",5000],
];
echo "<table border='5px' cellpading='10px' cellspacing='5px'>";
foreach($buisness as list($id,$name,$post,$salery)){
    echo "<tr><td>$id </td><td>$name </td><td>$post </td><td>$salery </tr></td>";
}
echo "</table>";
echo "<br>";
?>




<?php
$buisness=[
    [1,"shanto","position",5000],
    [2,"shihab","position",10000],
    [3,"omer","position",20000],
    [4,"bishal","position",7000],
];
echo "<table border='5px' cellpading='10px'cellspacing=''5px'>";
foreach($buisness as list($number,$name,$post,$salery)){
    echo "<tr><td>$number</td>  <td>$name</td><td>$post</td><td>$salery</td></tr>";
}
echo "</table>";
?>