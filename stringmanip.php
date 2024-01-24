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
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10). '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)). '<br/>';
        '<br/>';
        echo 'Get a Substring: ' . substr($name, 3, 5).'<br/>';

        echo 'Get position of string: ' . strpos($name, 'w').'<br/>';
        //Returns NULL
        
        // echo 'Get position of string:' .strpos($combine, 'z').'<br/>';
        
        echo 'Find Character "R": ' . strchr($name, 'R').'<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' . strchr($name, 's').'<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e').'<br/>';

        
        echo 'Find Length of String: ' . "A" . "B C D" . "E" . '<br/>';

        
        echo 'Without Trim: '. "A" . "B C D" . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        
        echo ' Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br/>';
            
    ?>  
</body>
</html>