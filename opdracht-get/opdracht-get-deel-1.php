<?php 

    $artikels = array(
            array('titel'=>"Francken: 'Dat Laurent klacht indient bij Unia'",
                 'datum'=>'1 december 2017',
                 'inhoud'=>file_get_contents('text/text-01.txt'),
                 'afbeelding'=>'images/artikel01.jpg',
                 'beschrijving'=>"Laurent op het feest van het Chinese leger in de Chinese ambassade."),

            array('titel'=>"Tesla activeert gigabatterij in Australië",
                 'datum'=>'1 december 2017',
                 'inhoud'=>file_get_contents('text/text-02.txt'),
                 'afbeelding'=>'images/artikel02.jpg',
                 'beschrijving'=>"De Tesla Powerpack in Zuid-Australië."),

            array('titel'=>"Ook Pearl Jam op Rock Werchter",
                 'datum'=>'1 december 2017',
                 'inhoud'=>file_get_contents('text/text-03.txt'),
                 'afbeelding'=>'images/artikel03.jpg',
                 'beschrijving'=>"Foto: ISOPIX")
                    );
        
    $individueelArtikel		=	false;
	$nietBestaandArtikel	=	false;    

    if ( isset ( $_GET['id'] ) )
	{
		$id = $_GET['id'];

		// Controleren of de opgevraagde key (=id) bestaat in de array $artikels
		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$individueelArtikel	=	true;
		}
		else
		{
			$nietBestaandArtikel	=	true;
		}		
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php if(!$individueelArtikel): ?>
        <title>Opdracht get</title>
    <?php else: ?>
        <title>Opdracht get: Artikel: <?= $artikels[0]['titel'] ?></title>
    <?php endif ?>
    <style>
        body
		{
			font-family:"Segoe UI";
			color:#423f37;
		}

		.container
		{
			width:	1024px;
			margin:	0 auto;
		}

		img
		{
			max-width: 100%;
		}

		.multiple
		{
			float:left;
			width:288px;
			margin:16px;
			padding:16px;
			box-sizing:border-box;
			background-color:#EEEEEE;
		}

		.multiple:nth-child(3n+1)
		{
			margin-left:0px;
		}

		.multiple:nth-child(3n)
		{
			margin-right:0px;
		}

		.single img
		{
			float:right;
			margin-left: 16px;
		}
    </style>
</head>
<body>
   <h1>Opdracht get deel 1</h1>
   
    <div class="container">
        <?php foreach ( $artikels as $id => $artikel ): ?>
            <article class="<?php echo ( !$individueelArtikel ) ? 'multiple': 'single' ; ?>">
                <h2><?= $artikel['titel'] ?></h2>
                <p><?= $artikel['datum'] ?></p>
                <img src="<?= $artikel['afbeelding'] ?>" alt="<?= $artikel['afbeeldingBeschrijving'] ?>">
                <p><?= ( !$individueelArtikel ) ? str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikel['inhoud'] ) ; ?></p>
                <?php if ( !$individueelArtikel ): ?>
                    <a href="opdracht-get-deel-1.php?id=<?= $id ?>">Lees meer</a>
                <?php endif ?>
            </article>
        <?php endforeach ?>
    </div>
    
</body>
</html>