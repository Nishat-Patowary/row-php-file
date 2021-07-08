
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>

</head>
<body>
    

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
name: <input type="text" name="Name"><br><br>
age: <input type="text" name="Age"><br><br>

<input type="submit" name="save">
</form>

<?php 
if(isset($_POST["save"])){
    echo $_POST ["Name"] . "<br>";
    echo $_POST ["Age"] . "<br>";

};

?>
</body>
</html>
