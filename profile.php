<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Profile - Facebook</title>
    </head>
    <body>

        <header>
            Il mio profilo - Feisbuc
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
                    Benvenuto sul profilo di
                    <?php echo $_SESSION['name']; ?>
                </h1>
                
                <a href="logout.php">
                    Esci
                </a>
            <?php
                }
                else {
                    echo '<h1>Furbacchiotto, ci hai provato</h1>';
                }
            ?>
        </main>
    </body>
</html>