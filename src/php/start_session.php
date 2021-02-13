<?php
    session_start();
    if($_SESSION['login']==true){
        $id_usuario =$_SESSION['id_usuario'];
        $apelido =$_SESSION['apelido'];
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
    }else{
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/index.php'>
            <script type=\"text/javascript\">
                window.location.href = \"http://localhost/myimages/index.php\";
            </script>
        ";
    }
?>