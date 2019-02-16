<?php
    include './includes/baseclass.inc.php';
    include './includes/derivedclass.inc.php';
    include './includes/newclass.inc.php';
    include './includes/users.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 
    $object = new NewClass;
    $object->setNewProperty("Farhan Utshaw");
    
    echo $object;

    echo $object::staticMethod();

    $utshaw = new Users("Farhan", "Utshaw");
    echo $utshaw;
    echo "<br>";
    echo $utshaw->fullName() ; 


?>
    
</body>
</html>