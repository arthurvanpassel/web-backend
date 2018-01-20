<?php
    
    //LOGOUT
	if (isset($_GET['logout'])) {
	
		setcookie('authenticated','', time() - 3600 );
		header('location: opdracht-cookies.php');
	}

    //LOG IN DATA
    $logindata = JSON_decode(file_get_contents('deel-1.txt'), true);
    $isAuthenticated = false;
    $message = false;

        

	//IF AUTHENTICATED
	if ( isset( $_COOKIE['authenticated'] ) ) 
	{
		$isAuthenticated	=	true;
        $id = $_COOKIE['authenticated'];
	}
    else
    {
        //ON PASSWORD SUBMIT
        if (isset($_POST['submit']) ) 
        {
            foreach ( $logindata as $id => $user )
            {
                if ( $_POST[ 'username' ] == $user['username'] && $_POST[ 'password' ] == $user['password'] )
                {
                    if ($_POST['remember'])
                    {
                        setcookie( 'authenticated', $id, time() + 2592000 );   //60s*60m*24u*30d
                    }
                    else
                    {
                        setcookie( 'authenticated', $id, time() + 10 );
                    }
                    header( 'location: opdracht-cookies.php' );
                    break;
                }
                    $message = 'Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw. ' . $_POST['username'] . $_POST['password'] . ' - ' . $user["username"] . $user['password'];
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht Cookies</title>
</head>
<body>
    <h1>Opdracht cookies</h1>
    <?php if ( $isAuthenticated ):	?>
        <h1>Dashboard</h1>
        <p>Hallo <?= $logindata[$id]['username'] ?>, fijn dat je er weer bij bent!</p>
        <p><a href="opdracht-cookies.php? logout=true">Uitloggen</a></p>
    <?php else: ?>
        <h1>Inloggen</h1>
        <p><?= $message ?></p>
        <form action="opdracht-cookies.php" method="post">
            <ul>
                <li>
                    <label for="username">gebruikersnaam</label>
                    <input type="text" id="username" name="username" value='jan'>
                </li>
                <li>
                    <label for="password">paswoord</label>
                    <input type="text" id="password" name="password">
                </li>
                <li>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Mij onthouden</label>
                </li>
            </ul>
            <input type="submit" name="submit">
        </form>
    <?php endif ?>
</body>
</html>