<?php
    
    $artikels =	array(
					array(	'title'	=> 'PHP 8.4 gereleased',
							'body' 	=> 'De nieuwste versie van PHP bevat uitbreidingen op oa. mind control-facades, in-browser 3d projecties en de API voor drones.',
							'tags' 	=> array( 'new', 'PHP 8.4')
					),
					array(	'title'	=> 'Zymphovel framework',
							'body' 	=> 'Wordt Zymphovel het nieuwste PHP-framework dat de wereld in een sneltempo zal veroveren?',
							'tags' 	=> array('new')
					),
					array(	'title'	=> 'Rasmus Lerdorf vermist',
							'body' 	=> 'De geestelijke vader van PHP Rasmus Lerdorf is sinds vorige week vermist nadat hij met zijn privé-jet richting Ibiza vertrok.',
							'tags' 	=> array( 'bizar', 'rasmus', 'feestneus')
					)
				);

    if ( isset( $_GET[ 'artikel' ] ) )
	{
		$artikel	=	$artikels[ $_GET[ 'artikel' ] ];
	}

    include 'view/header.html';
    if ( !isset($_GET['artikel']))
    {
        include 'view/artikels.html';
    }
    else
    {
        include 'view/artikel.html';
    }
    include('view/footer.html');
?>