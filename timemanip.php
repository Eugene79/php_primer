<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Time Manipulation</h2>

    <?php
        $datenow = implode(' ', getdate());
        echo "<p>$datenow</p>";
        print_r(array_keys(getdate()));
        echo "</hr>";
        $datearray = getdate();
        foreach($datearray as $key => $value) {
            echo "<p>$key is  $value</p>";
          }

    ?>
</body>
</html>