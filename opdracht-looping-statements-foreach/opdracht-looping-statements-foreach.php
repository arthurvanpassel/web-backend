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

    // DEEL 2

    $textCharsTog = array();
    $counter2 = array();

    $textCharsTog = array_map('strtoupper',$textCharsRev);
    
    $textCharsAlph = array();

    foreach($textCharsTog as $key => $value)
    {
        if (ctype_alpha($value))
            $textCharsAlph[$key] = $value;
    }

    foreach($textCharsAlph as $value)
    {
        if (isset($counter2[$value]))
            $counter2[$value]++;
        else
            $counter2[$value] = 1;
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
   
   <h1>Opdracht deel 2</h1>
   
   <pre><?php var_dump($counter2) ?></pre>
    
</body>
</html>