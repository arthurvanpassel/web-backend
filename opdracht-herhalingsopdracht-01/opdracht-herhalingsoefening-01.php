<?php

    var_dump($_GET);

    $cursus = false;
    $voorbeelden = false;
    $opdrachten = false;
    $search = false;

    if (isset($_GET['link']))
    {
        switch($_GET['link'])
        {
            case 'cursus':
                $cursus = true;
                break;
                
            case 'voorbeelden':
                $voorbeelden = true;
                $map = 'voorbeelden';
                $bestandenArray = getBestanden($map);
                break;
                
            case 'opdrachten':
                $opdrachten = true;
                $map = 'opdrachten';
                $bestandenArray = getBestanden($map);
                break;
        }
    }

    if (isset($_GET['search']))
    {
        $search = true;
        
        $voorbeeldenBestanden = getBestanden('voorbeelden');
        $opdrachtenBestanden = getBestanden('opdrachten');
        
        $alleBestanden = array_merge($voorbeeldenBestanden, $opdrachtenBestanden);
        
        $resultaten = array();
        $zoekString = $_GET['search'];
        
        foreach ($alleBestanden as $bestand)
        {
            $zoekStringGevonden = strpos($bestand['bestand'], $zoekString);
            
            if ($zoekStringGevonden !== false)
                $resultaten[] = $bestand;
        }
        
        var_dump($resultaten);
        
        $bestandenArray = $resultaten;
    }

    function getBestanden($map)
    {
        $bestandenArray = scandir("../../cursus/public/cursus/". $map."/");
        $multiDimensionleBestandenArray = array();
        
        array_shift($bestandenArray);
        array_shift($bestandenArray);
        
        foreach ($bestandenArray as $key => $bestand)
        {
            $tempArray = array();
            $tempArray['map'] = $map;
            $tempArray['bestand'] = $bestand;
            $tempArray['folder'] = 'http://web-backend.local/cursus/'.$map."/".$bestand;
            
            $multiDimensionleBestandenArray[$key] = $tempArray;
        }
        
        return $multiDimensionleBestandenArray;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Herhalingsopdracht 01</title>
    <style>
        iframe
        {
            width: 1000px;
            height: 750px;
        }
    </style>
</head>
<body>
   <h1>Herhalingsopdracht 01</h1>
   
   <ul>
       <li><a href="opdracht-herhalingsoefening-01.php?link=cursus">Cursus</a></li>
       <li><a href="opdracht-herhalingsoefening-01.php?link=voorbeelden">Voorbeelden</a></li>
       <li><a href="opdracht-herhalingsoefening-01.php?link=opdrachten">Opdrachten</a></li>
   </ul>
   
   <form action="opdracht-herhalingsoefening-01.php" method="GET">
       <label id='search' for="search">Zoek naar:</label>
       <input type="text" name="search" id="search">
       <input type="submit">
   </form>
   
   <?php if($cursus): ?>
   <iframe src="http://web-backend.local/cursus/web-backend-intro.pdf"></iframe>
   <?php endif ?>
   
   <?php if ($voorbeelden || $opdrachten || $search): ?>
       <ul>
           <?php foreach ($bestandenArray as $bestand): ?>
               <li><a href="<?= $bestand['folder'] ?>"><?= $bestand['bestand'] ?></a></li>
            <?php endforeach ?>
       </ul>
   <?php endif ?>
    
</body>
</html>