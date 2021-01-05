<?php
    session_start();
    session_destroy();
    setcookie("login", $login, 1);

    echo "<script>window.location = './index.php'</script>";
?>