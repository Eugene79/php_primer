<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <h2>Follow each link to the page</h2>
    <ul>
        <li><a href="ifstatement.php">Simple If Statement</a></li>
        <li><a href="whileloop.php">Simple While Loop</a></li>
        <li><a href="array.php">Arrays in PHP</a></li>
        <li><a href="simplemanip.php">Simple Array Manipulations</a></li>
        <li><a href="timemanip.php">Time Manipulations</a></li>
    </ul>
    <!-- Basic HTML -->
    <h1>Hello World!</h1>

    <!--  -->
    <?php
        echo 'Hello PHP!';
        $name = 'Eugen R';
        $age = 42;
        echo '<br/>';
        echo '<h1>My name is '.$name.'</h1>';
        echo '<h1>My age is '.$age.'</h1>';
        echo "<h1>My age is also $age.</h1>";
    ?>

<a href="https://www.heroku.com">Heroku</a>
</body>
</html>