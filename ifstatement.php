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
        $grade = 50;

        if($grade >= 50){
            echo '<h3>You have passed </h3>';
        }
        else{
            echo '<h3>You have failed </h3>';
        }

        switch($grade){
            case 'A':
                echo 'Bla bla bal';
                break;
            default:
                echo 'Bulb bulb bulb';
                break;
        }
    
    ?>
</body>
</html>