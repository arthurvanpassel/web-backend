<?php 

    session_start();

    if (isset($_GET['session']))
    {
        if ($_GET['session'] == 'destroy')
            session_destroy();
            header('location: opdracht-sessions-page1.php');
    }
    
    $email = (isset($_SESSION['rgsData']['page1']['email'])) ? 
                    $_SESSION['rgsData']['page1']['email'] : '';
    $nickname = (isset($_SESSION['rgsData']['page1']['nickname'])) ? 
                    $_SESSION['rgsData']['page1']['nickname'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht sessions - page 1</title>
</head>
<body>
   <h1>Opdracht sessions</h1>
   
   <a href="opdracht-sessions-page1.php?session=destroy">Vernietig sessie</a>
   
   <h2>deel 1</h2>
    
    <form action="opdracht-sessions-page2.php" method="POST">
        <ul>
            <li>
                <label for="email">e-mail</label>
                <input type="text" id="email" name='email' value="<?= $email ?>" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?>>
            </li>
            <li>
                <label for="nickname">nickname</label>
                <input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" <?= (isset($_GET['focus']) && $_GET['focus'] == "nickname" ) ? 'autofocus' : '' ?>>
            </li>
        </ul>
        <input type="submit" name="submit" value="Volgende">
    </form>
</body>
</html>