<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statement</title>
</head>
<body>
<h1></h1>IF-ELSE Statements</h1>
    <?php 
    echo 'If Statement</h2>';

    $grade = 90;
// ==, >, <, <=, >=
    if($grade >= 50){
        echo '<h3 style="color:darkgreen">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h3 style="color:red">YOU HAVE FAILED</h3>'; 
    }
    $grade = 'A';
    //If-Else IF-else
    if($grade == 'A'){
        echo '<h2 style="color:pink">YOU ARE A SUPERSTAR!</h2>';
    }
    elseif ($grade == 'B'){
        echo '<h2 style="color:blue">YOU DID WELL!</h2>';
    }
    else{
        echo '<h2 style="color:black">YOU HAVE FAILED...</h2>';
    }
    ?>
</body>
</html>