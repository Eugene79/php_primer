<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Title </h1>

    <?php 
        $numbers = array(1, 5, 6, 10, 1111, 56, 443, 556);

        for ($i=0; $i < count($numbers); $i++) { 
            echo "<p>$numbers[$i]</p>";
        }
    ?>
</body>
</html>