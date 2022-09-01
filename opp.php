<?php
    require_once './OOP/vehicle.php';
    require_once './OOP/process.php';
    $toyota = new Vehicle('spider','saloon','red');

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
    echo $toyota->name."<br>";
    echo $toyota->type."<br>";
    echo $toyota->color."<br>";
    ?>

    <form action="" method="post">
        <span><?=$user_er?></span>
        <input type="text" name="user" id="">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>