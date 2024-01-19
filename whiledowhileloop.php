<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER - WHILE /DO WHILE LOOPS</title>
</head>
<body>
   <h1>While Loop</h1>
    <?php
         $grade = 0;
        while($grade < 10){
        echo '<p>I AM LESS THAN 10!</p>';
        $grade++;
    } 
    echo 'EXIT LOOP!'; 
    ?>


    <h1>Do-While Loop</h1>
    <?php
        $grade = 0;
         do{ 
             echo '<p>I AM DO WHILE LOOP</p>';
             $grade++;
        }while ($grade < 10);
        echo'EXIT LOOP';
    ?>


</body>
</html>