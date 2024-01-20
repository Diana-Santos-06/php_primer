<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer  - String Manipulationg</title>
</head>
<body>
    <h1>PHP String Manipulation</h1>
    <?php 
    //Concatenation of Strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "diana esther";
        echo $phrase1 . ",named Beto,  " . $phrase2;
        echo '<br/>';

        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';

        
    ?>
</body>
</html>