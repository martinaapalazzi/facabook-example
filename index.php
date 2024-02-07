<?php
    session_start();

    var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facebook Login</title>
    </head>
    <body>

        <header>
            Feisbuc
        </header>

        <main>
            <?php 
                if (
                    isset($_SESSION['email'])
                    &&
                    isset($_SESSION['name'])
                ) {
            ?>
                <h1>
                    Benvenuto <?php echo $_SESSION['name']; ?>
                </h1>
            <?php
                }
                else {
            ?>
                <a href="login.php">
                    Loggati
                </a>
            <?php
                }
            ?>
        </main>
    </body>
</html>