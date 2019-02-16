<?php
    include './includes/baseclass.inc.php';
    include './includes/derivedclass.inc.php';
    $object = new DerivedClass;
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

<?= $object->info()    ?>
    
</body>
</html>