<?php

	$getal 		=	47;
	$onderGrens	=	0;
	$bovenGrens	=	10;
	$ongeldig	=	false;

	// Boven en ondergrens bepalen
	if ($getal >= 0 && $getal < 10)
	{
		$onderGrens	=	0;
		$bovenGrens	=	10;
	}
	elseif ($getal >= 10 && $getal < 20)
	{
		$onderGrens	=	10;
		$bovenGrens	=	20;
	}
	elseif ($getal >= 20 && $getal < 30)
	{
		$onderGrens	=	20;
		$bovenGrens	=	30;
	}
    elseif ($getal >= 30 && $getal < 40)
	{
		$onderGrens	=	30;
		$bovenGrens	=	40;
	}
    elseif ($getal >= 40 && $getal < 50)
	{
		$onderGrens	=	40;
		$bovenGrens	=	50;
	}
    elseif ($getal >= 50 && $getal < 60)
	{
		$onderGrens	=	50;
		$bovenGrens	=	60;
	}
    elseif ($getal >= 60 && $getal < 70)
	{
		$onderGrens	=	60;
		$bovenGrens	=	70;
	}
    elseif ($getal >= 70 && $getal < 80)
	{
		$onderGrens	=	70;
		$bovenGrens	=	80;
	}
    elseif ($getal >= 80 && $getal < 90)
	{
		$onderGrens	=	80;
		$bovenGrens	=	90;
	}
    elseif ($getal >= 90 && $getal < 100)
	{
		$onderGrens	=	90;
		$bovenGrens	=	100;
	}
	else
	{
		$ongeldig =	true;
	}

	
	// Tekst samenstellen
	if ( !$ongeldig )
	{
		$tekst =	'Het getal ' . $getal . ' ligt tussen '. $bovenGrens . ' en ' . $onderGrens;
	}
	else
	{
		$tekst = 'Het getal ' . $getal . ' ligt niet tussen de opgegeven waarde';	
	}

	/*
			
		Een iets elegantere oplossing:

		$onderGrens =	floor( $getal / 10 );
		$bovenGrens	=	$onderGrens	+ 10;

	*/


	// Draai de tekst om
	$omgekeerdeTekst	=	strrev($tekst);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Odracht if else if</title>
	</head>
	<body>
		
		<h1>Opdracht if else if</h1>

		<?php if ( !$ongeldig ): ?>
			<p><?php echo $onderGrens ?> & <?php echo $bovenGrens ?>.</p>
		<?php else: ?>
			<p>Het getal <?php echo $getal ?> ligt niet tussen de opgegeven waarde</p>
		<?php endif ?>

		<p><?php echo $omgekeerdeTekst ?></p>
	</body>
</html>