<?php
	
	$getal 	= 	3; 
	$dag 	=	'onbekende dag';
          
    if ( $getal == 1 ) 
    { 
        $dag = 'maandag'; 
    } 
      
    if ( $getal == 2 ) 
    { 
        $dag = 'dinsdag'; 
    } 
      
    if ( $getal == 3 ) 
    { 
        $dag = 'woensdag'; 
    } 
      
    if ( $getal == 4 ) 
    { 
        $dag = 'donderdag'; 
    } 
      
    if ( $getal == 5 ) 
    { 
        $dag = 'vrijdag'; 
    } 
      
    if ( $getal == 6 ) 
    { 
        $dag = 'zaterdag'; 
    } 
      
    if ( $getal == 7 ) 
    { 
        $dag = 'zondag'; 
    } 
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Conditional statements: deel1</title>
	</head>
	<body>
        
        <h1>Conditional statements: deel1</h1>

		<p>De dag die overeenkomt met het getal "<?= $getal ?>" is: <?php echo $dag ?></p>
	</body>
</html>