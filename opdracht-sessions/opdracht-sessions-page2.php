<?php 

    session_start();

    var_dump($_POST);
    var_dump($_SESSION);

    if (isset($_POST['submit']))
    {
        $_SESSION['rgsData']['page1']['email'] = $_POST['email'];
        $_SESSION['rgsData']['page1']['nickname'] = $_POST['nickname'];
    }
    
    $rgsData['page1'] = $_SESSION['rgsData']['page1'];

    $straat = (isset($_SESSION['rgsData']['page2']['straat'])) ?                        $_SESSION['rgsData']['page2']['straat'] : '';

    $nummer = (isset($_SESSION['rgsData']['page2']['nummer'])) ?                        $_SESSION['rgsData']['page2']['nummer'] : '';

    $gemeente = (isset($_SESSION['rgsData']['page2']['gemeente'])) ?                        $_SESSION['rgsData']['page2']['gemeente'] : '';

    $postcode = (isset($_SESSION['rgsData']['page2']['postcode'])) ?                        $_SESSION['rgsData']['page2']['postcode'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht sessions - page 2</title>
</head>
<body>
   <h1>Opdracht sessions</h1>
   
   <a href="opdracht-sessions-page1.php?session=destroy">Vernietig sessie</a>

    <h2>Registratiegegevens</h2>

    <ul>
        <?php foreach($rgsData['page1'] as $data => $value ):  ?>
            <li><?= $data ?>: <?= $value ?></li>
        <?php endforeach ?>
    </ul>
    
    <h2>deel 2</h2>
    
    <form action="opdracht-sessions-page3.php" method="post">
        <ul>
            <li>
                <label for="straat">straat</label>
                <input type="text" id="straat" name="straat" value="<?= $straat ?>" <?= (isset($_GET['focus']) && $_GET['focus'] == "straat" ) ? 'autofocus' : '' ?>>
            </li>
            <li>
                <label for="nummer">nummer</label>
                <input type="text" id="nummer" name="nummer" value="<?= $nummer ?>" <?= (isset($_GET['focus']) && $_GET['focus'] == "nummer" ) ? 'autofocus' : '' ?>>
            </li>
            <li>
                <label for="gemeente">gemeente</label>
                <input type="text" id="gemeente" name="gemeente" value="<?= $gemeente ?>" <?= (isset($_GET['focus']) && $_GET['focus'] == "gemeente" ) ? 'autofocus' : '' ?>>
            </li>
            <li>
                <label for="postcode">postcode</label>
                <input type="text" id="postcode" name="postcode" value="<?= $postcode ?>" <?= (isset($_GET['focus']) && $_GET['focus'] == "postcode" ) ? 'autofocus' : '' ?>>
            </li>
        </ul>
        <input type="submit" name='submit' value="Volgende">
    </form>
</body>
</html>