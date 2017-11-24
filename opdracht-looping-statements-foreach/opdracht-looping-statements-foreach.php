<?php

    $text = file_get_contents('text-file.txt');

    $textChars = str_split($text);

    rsort($textChars);
    $textCharsRev = array_reverse($textChars);

    $counter = array();

    foreach($textCharsRev as $value)
    {
        if (isset($counter[$value]))
            $counter[$value]++;
        else
            $counter[$value] = 1;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht looping foreach</title>
</head>
<body>
   <h1>opdracht foreach deel 1</h1>
   
   <pre><?php var_dump($counter) ?></pre>
    
</body>
</html>