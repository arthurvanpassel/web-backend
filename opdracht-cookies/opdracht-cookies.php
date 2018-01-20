<?php
    
    //LOGOUT
	if (isset($_GET['logout'])) {
	
		setcookie('authenticated','', time() - 3600 );
			
		header('location: opdracht-cookies.php');
	}

    //LOG IN DATA
    $logindata = explode(",",file_get_contents('deel-1.txt'));
    // => logindata[0] = 'jan'
    // => logindata[1] = 'paswoord01'
    $isAuthenticated = false;
    $message = '';

        

	//IF AUTHENTICATED
	if ( isset( $_COOKIE['authenticated'] ) ) 
	{
		$isAuthenticated	=	true;
	}
    else
    {
        //ON PASSWORD SUBMIT
        if (isset($_POST['submit']) ) 
        {

            if ( $_POST[ 'password' ] == $logindata[ 1 ] || $_POST[ 'username' ] == $logindata[ 0 ] )
            {
                setcookie( 'authenticated', TRUE, time() + 10 );
                header( 'location: opdracht-cookies.php' );
            } 
            else 
            {

                $message = 'Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw. ' . $_POST['username'] . $_POST['password'] . ' - ' . $logindata[0] . $logindata[1];
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
    <h1>Opdracht cookies - deel 1</h1>
    <h1>Inloggen</h1>
    
    <?php if ( $isAuthenticated ):	?>
        <p>U bent ingelogd.</p>
        <p><a href="opdracht-cookies.php? logout=true">Uitloggen</a></p>
    <?php else: ?>
        <?php if ( $message ): ?>
            <p><?php echo $message ?></p>
        <?php endif ?>
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
            </ul>
            <input type="submit" name="submit">
        </form>
    <?php endif ?>
</body>
</html>