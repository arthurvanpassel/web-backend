<?php

	session_start();

    var_dump( $_POST );
    var_dump( $_SESSION );

    if ( isset( $_POST['submit'] ) )
    {
        $_SESSION['rgsData']['page2']['straat'] = $_POST['straat'];
        $_SESSION['rgsData']['page2']['nummer'] = $_POST['nummer'];
        $_SESSION['rgsData']['page2']['gemeente'] = $_POST['gemeente'];
        $_SESSION['rgsData']['page2']['postcode'] = $_POST['postcode'];
    }

    $rgsData    =   $_SESSION['rgsData'];

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht sessions - page3</title>

    </head>
    <body>
		
		<h1>Opdracht sessions</h1>

        <a href="opdracht-sessions-page1.php?session=destroy">Vernietig sessie</a>

        <h2>Overzicht</h2>

        <ul>

        <?php foreach($rgsData as $pageKey => $pageArray):  ?>

            <?php foreach($pageArray as $data => $value):  ?>
                <li>
                    <?= $data ?>: <?= $value ?>
                    <p><a href="opdracht-sessions-<?= $pageKey ?>.php?focus=<?= $data ?>">wijzig</a></p>
                </li>
            <?php endforeach ?>

        <?php endforeach ?>
        
        </ul>

		
    </body>
</html>