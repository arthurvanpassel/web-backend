<?php
    
    function berekenKapitaal($kapitaal, $rente, $duur)
    {
        static $counter = 1;
        static $tijdverloop = array();
        
        if ($counter <= $duur)
        {
            $renteprijs = floor($kapitaal * ($rente*0.01));
            $nKapitaal = $kapitaal + $renteprijs;
            $tijdverloop[$counter] = "Hans' kapitaal na ".$counter." jaar is ".$nKapitaal." euro.";
            
            $counter++;
            
            return berekenKapitaal($nKapitaal, $rente, $duur);
        }
        else
            return $tijdverloop;
    }

    $totaalKapitaal = berekenKapitaal(100000,10,10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht functies recursive</title>
</head>
<body>
    <h1>Opdracht functies recursive deel 1</h1>
    
    <?php foreach($totaalKapitaal as $value): ?>
        <p><?= $value ?></p>
    <?php endforeach ?>
    
</body>
</html>