<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h2>Follow each link t the page example</h2>
    <u1>
        <li><a href="arrey.php">Simple Array and Printouts</a></li>
        <li><a href="forloop.php">Simple For Loop</a></li>
        <li><a href="whiledowhileloop.php">Simple While/Do While Loop</a></li>
        <li><a href="ifstatement.php">Simple If Statement</a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a></li>
        <li><a href="stingmanip.php">Simple String Manipulation</a></li>
    </u1>
        
    <!--Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php 
    //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>
    
    <?php
        //Declare Variable
        $name = 'Diana Esther';
        $age = 19;
        // echo variable
        echo $name;
        echo'<h1>My Name Is: '.$name.' </h1>';
        echo'<h1>My Age Is: '.$age.' </h1>';
    ?>
</body>
</html>