<?php
    
    $password = 'azerty';
    $username = 'arthur';
    $message = '';

    if (isset($_POST['username']))
    {
        if ($_POST['username'] == $username)
            $message = "Gebruikersnaam is juist.<br>";
        elseif ($_POST['username'] == '')
            $message = "Geen gebruikersnaam ingegeven!<br>";
        else
            $message = "Gebruikersnaam is fout.<br>";
    }
    else
        $message = "Geen gebruikersnaam ingegeven!<br>";
    
    if (isset($_POST['password']))
    {
        if ($_POST['password'] == $password)
            $message = $message . "Wachtwoord is juist.";
        elseif ($_POST['password'] == '')
            $message = $message . "Geen wachtwoord ingegeven!<br>";
        else
            $message = $message . "Wachtwoord is fout.";
    }
    else
        $message = $message . "Geen wachtwoord ingegeven!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht post</title>
</head>
<body>
   <h1>Opdracht post</h1>
   
    <form action="opdracht-post.php" method="post">
        <div><label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username"></div>
        <div><label for="password">Paswoord:</label>
        <input type="password" name="password" id="password"></div>

        <input type="submit" value="Verzend">
        
        <p><?= $message ?></p>
    </form>
</body>
</html>