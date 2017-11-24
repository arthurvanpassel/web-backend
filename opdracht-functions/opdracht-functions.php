<?php

    function berekenSom($getal1, $getal2)
    {
        return $getal1 + $getal2;
    }

    function vermenigvuldig($getal1, $getal2)
    {
        return $getal1 + $getal2;
    }

    function isEven($getal)
    {
        if ($getal % 2 == 0)
            return true;
        else
            return false;
    }

    $string = "Dit is een test.";

    function toUppercase($string)
    {
        $array = array();
        $array['uppercase'] = strtoupper($string);
        $array['length'] = strlen($string);
        
        return $array;
    }

    $testArray = array("Elon Musk", "Batman", "Barrack Obama");

    $testFunctie = drukArrayAf($testArray);

    function drukArrayAf($array)
    {
        $results = array();
        
        $naam = key(end($GLOBALS));
        
        foreach ($array as $key => $value)
        {
            $results[] = $naam . "[" . $key . "]" . " heeft als waarde " . $value;
        }
        
        return $results;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht functions</title>
</head>
<body>
    <h1>Opdracht functies deel 1</h1>
    
    <p>1 + 2 = <?= berekenSom(1,2) ?></p>
    <p>2 * 3 = <?= vermenigvuldig(2,3) ?></p>
    <p>Is 17 even? <?= isEven(17) ? "Ja!":"Nee!" ?></p>
    
    <h2>Uitbreiding</h2>
    <p>De string is: <?= $string ?></p>
    <p>uppercase: <?php echo toUppercase($string)['uppercase'] ?></p>
    <p>lengte: <?php echo toUppercase($string)['length'] ?></p>
    
    <h2>Deel 2</h2>
    
    <?php foreach($testFunctie as $value): ?>
        <p><?= $value ?></p>
    <?php endforeach ?>
</body>
</html>