<?php
    session_start();

    $users = [
        [
            'id' => 1,
            'name' => 'Gino Paoli',
            'email' => 'gino@boolean.careers',
            'password' => 'pass',
        ],
        [
            'id' => 2,
            'name' => 'Peppe Giallo',
            'email' => 'peppe@boolean.careers',
            'password' => 'pass',
        ],
        [
            'id' => 3,
            'name' => 'Mario Luigi',
            'email' => 'mario@boolean.careers',
            'password' => 'password',
        ],
    ];

    $isLoggedIn = false;
    foreach ($users as $key => $user) {
        if (
            $_POST['email'] == $user['email']
            &&
            $_POST['password'] == $user['password']
        ) {
            $isLoggedIn = true;

            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];

            header('Location: ./profile.php');
        }
    }

    if ($isLoggedIn == false) {
        header('Location: ./login.php');
    }
?>