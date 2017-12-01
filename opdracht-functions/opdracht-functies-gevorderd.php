<?php

    $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

    function berekenProcent1($string, $char)
    {
        $length = strlen($string);
        $charAmount = substr_count($string, $char);
        
        return (($charAmount / $length) * 100);
    }

    function berekenProcent2($char)
    {
        global $md5HashKey;
        $string = $md5HashKey;
        $length = strlen($string);
        $charAmount = substr_count($string, $char);
        
        return (($charAmount / $length) * 100);
    }

    function berekenProcent3($char)
    {
        $string = $GLOBALS['md5HashKey'];
        $length = strlen($string);
        $charAmount = substr_count($string, $char);
        
        return (($charAmount / $length) * 100);
    }


    // DEEL 2

    $pigHealth = 5;
    $maximumThrows = 8;

    function calculateHit()
    {
        global $pigHealth;
        $hitChance = rand(0,9);
        
        if  ($hitChance <= 3)
        {
            $pigHealth--;
            return "Raak! Er zijn nog maar ".$pigHealth." varkens over.";
        }
        else
            return "Mis! Nog ".$pigHealth." varkens in het team";
    }

    function launchAngryBird()
    {
        static $timesFunctionUsed = 0;
        global $maximumThrows;
        global $pigHealth;
        
        if($maximumThrows > timesFunctionUsed)
        {
            $timesFunctionUsed++;
            launchAngryBirds();
        }
        
        if($pigHealth>0)
            return 'Verloren!';
        else
            return 'Gewonnen!';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht functies gevorderd</title>
</head>
<body>
    <h1>Opdracht functies gevorderd deel 1</h1>
    
    <p>Functie 1: de needle '2' komt <?= berekenProcent1($md5HashKey,  '2') ?>% voor in de hash key '<?= $md5HashKey ?>'</p>
    
    <p>Functie 2: de needle 'a' komt <?= berekenProcent2('a') ?>% voor in de hash key '<?= $md5HashKey ?>'</p>
    
    <p>Functie 2: de needle '8' komt <?= berekenProcent2('8') ?>% voor in de hash key '<?= $md5HashKey ?>'</p>
    
    
</body>
</html>