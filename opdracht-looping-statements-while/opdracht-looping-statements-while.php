<?php
    
    $getallen = array();
    $aantal = 100;

    $getal = 0;

    while ($getal < $aantal){
        $getallen[] = $getal;
        ++$getal;
    }

    $stringGetallen = implode( ', ', $getallen);


    $getallen2 = array();

    $getal = 40;

    while ($getal < 80){
        if ($getal % 3 == 0)
            $getallen2[] = $getal;
        
        ++$getal;
    }

    $stringGetallen2 = implode( ', ', $getallen2);


    $lijstje = array("choco", 'confituur', 'salami');
    $counter = 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht while</title>
</head>
<body>
    <h1>Oplossing while deel 1</h1>
    
    <p>Reeks 1: <?= $stringGetallen ?></p>
    
    <p>Reeks 2: <?= $stringGetallen2 ?></p>
    
    <h1>Oplossing while deel 2</h1>
    
    <ul>
        <?php
            while ( isset( $lijstje[$counter])): 
        ?>
        <li><?=
            $lijstje[$counter];
            ++$counter
            ?>
        </li>
        <?php endwhile ?>
        
    </ul>
</body>
</html>