<?php
    session_start();
    $_SESSION['login'] = null;
    $_SESSION['id_usuario'] = null;
    $_SESSION['apelido'] = null;
    $_SESSION['nome'] = null;
    $_SESSION['email'] = null;
    $_SESSION['senha'] = null;
    session_destroy();
    session_register_shutdown();
    echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/index.php'>
            <script type=\"text/javascript\">
                window.location.href = \"http://localhost/myimages/index.php\";
            </script>
        ";
?>
