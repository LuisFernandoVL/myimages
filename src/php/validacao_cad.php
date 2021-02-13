<?php
    $cad = false;
    if(strlen($apelido) <= 0 || strlen($apelido) > 32)
    {
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"Nome de usuário precisa conter de 1 a 32 caracteres! \");
                window.location.href = \"http://localhost/myimages/form_cadastro.php\";
            </script>
        ";
        $cad = false;
    }else if(strlen($nome) <= 0 || strlen($nome) > 48){
        echo "         
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"Nome precisa conter de 1 a 48 caracteres! \");
                window.location.href = \"http://localhost/myimages/form_cadastro.php\";
            </script>
        ";
        $cad = false;
    }else if(strlen($email) <= 0 || strlen($email) > 48){
        echo "         
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"E-mail precisa conter de 1 a 48 caracteres! \");
                window.location.href = \"http://localhost/myimages/form_cadastro.php\";
            </script>
        ";
        $cad = false;
    }else if(strlen($senha) < 8 || strlen($senha) > 16){
        echo "         
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"Senha precisa conter de 8 a 16 caracteres! \");
                window.location.href = \"http://localhost/myimages/form_cadastro.php\";
            </script>
        ";
        $cad = false;
    }else if($senha != $conf){
        echo "         
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"As senhas não coincidem. Redigite! \");
                window.location.href = \"http://localhost/myimages/form_cadastro.php\";
            </script>
        ";
        $cad = false;
    }else{
        $cad = true;
    }
?>

