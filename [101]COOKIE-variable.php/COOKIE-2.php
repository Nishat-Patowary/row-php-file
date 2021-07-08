<?php 

$cookie_name="users";
$cookie_value="This is password";

setcookie($cookie_name,$cookie_value, time () + (4600), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!isset($_COOKIE[$cookie_value])){
        echo "cookie is not set";
    }else{
        echo $_COOKIE[$cookie_value];
    }
    ?>
</body>
</html>