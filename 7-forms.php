<?php
$title = "Learning Form Handling";
    $arr = array("Gulzaib");
    if(isset($_POST['name'])){
        // array_push($arr, $_POST['name']);
        // foreach($arr as $item){
        //     echo $item . "<br>";

        // }
        echo $_POST['name'];
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <h1>
        <?php echo $title ?>
    </h1>
    <form action="7-forms.php" method="POST">
    <input type="text" name="name">
    <input type="submit">
    </form>
</body>

</html>