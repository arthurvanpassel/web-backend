<?php

	$jaartal			=	1900;
	$isSchrikkeljaar 	= 	false;

	if (
        (
            ( $jaartal % 4 == 0 ) 
            && 
            ( $jaartal % 100 != 0 )
        ) 
        || 
        ( $jaartal % 400 == 0 )
    )
	{
		$isSchrikkeljaar = true;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Opdracht conditional statement if else: deel1</title>
	</head>
	<body>
		
		<h1>Opdracht conditional statement if else: deel1</h1>

		<p>Het jaar "<?php echo $jaartal ?>" is <?php echo ( $isSchrikkeljaar ) ? "een" : "geen"  ?> schrikkeljaar </p>
	</body>
</html>