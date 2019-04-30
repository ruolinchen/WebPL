<?php 
    session_start();
?>
<?php
    function reject($entry) {
        echo 'Please <a href="login.html">Log in </a>';
        exit();
    }
    if (isset($_POST['username'])) {
        $user = trim($_POST['username']);

        if (isset($_POST['password'])) {
            $pwd = trim($_POST['password']);
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pwd;

            header('Location: index.html');    
        }
    }
    else {  
        header('Location: login.html');
    }
?>