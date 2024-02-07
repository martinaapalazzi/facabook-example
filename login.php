<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Feisbuc</title>
    </head>
    <body>

        <header>
            Login - Facebook
        </header>

        <main>
            <form action="process-login.php" method="POST">
                <div>
                    <label for="email">
                        Email
                    </label>

                    <div>
                        <input type="email" name="email" id="email">
                    </div>
                </div>

                <div>
                    <label for="password">
                        Password
                    </label>

                    <div>
                        <input type="password" name="password" id="password">
                    </div>
                </div>

                <div>
                    <button type="submit">
                        Accedi
                    </button>
                </div>
            </form>
        </main>
    </body>
</html>