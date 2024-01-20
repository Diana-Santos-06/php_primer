<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer  - String Manipulationg</title>
</head>
<body>
    <?php 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "diana esther";
        echo $phrase1 . ",named Beto,  " . $phrase2;
        echo '<br/>';

        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';

        
    ?>
</body>
</html>