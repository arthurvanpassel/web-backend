<?php

    setlocale( LC_ALL, 'nld_nld' );

    $mktime = mktime(22, 35, 25, 1, 21, 1904);
    $date = date('d F Y, g:i:s a', $mktime);
    $date2 = strftime('%d %B %Y, %H:%M:%S %p', $mktime);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht date</title>
</head>
<body>
   
   <h1>Opdracht date</h1>
   
   <p>Timestamp : <?= $date ?></p>
   <p>Tijdstempel : <?= $date2 ?></p>
   
    
</body>
</html>