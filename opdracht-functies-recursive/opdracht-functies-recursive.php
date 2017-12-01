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


    //DEEL 2

    function berekenKapitaal2($data)
    {
        if ($data['counter'] <= $data['duur'])
        {
            $renteprijs = floor($data['kapitaal'] * ($data['rente']*0.01));
            $data['kapitaal'] += $renteprijs;
            $data['tijdverloop'][$data['counter']] = "Hans' kapitaal na ".$data['counter']." jaar is ".$data['kapitaal']." euro.";
            
            $data['counter']++;
            
            return berekenKapitaal2($data);
        }
        else
            return $data;
    }

    $totaalKapitaal2 = berekenKapitaal2(array('kapitaal'=>100000,
                                      'rente'=>8,
                                      'duur'=>10,
                                      'counter'=>1,
                                      'tijdverloop'=>array()));

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
    
    <h1>Deel 2</h1>
    
    <?php foreach($totaalKapitaal2['tijdverloop'] as $value): ?>
        <p><?= $value ?></p>
    <?php endforeach ?>
    
</body>
</html>