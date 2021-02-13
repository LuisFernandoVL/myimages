<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Imagem</title>
</head>
<body>
<?php
    
    session_start();
    include_once('conectar_bd.php');
    $_SESSION['login'] = false;
    function corrige1($str1){
        $troca1 = array(
            '!' , '"' , '#' , '$' , '%' , '&' , '\'' , '(' , ')' , '*' , '+' ,',' , '-' , '/' , ':' , ';' , '<'  , '=' , '>' , '?' , '[' , '\\', ']' , '^' , '`' , '{'  , '|' , '}' , '~'
        );
        return $str1 = str_replace($troca1,"",$str1);
    }
    function corrige2($str2){
        $troca2 = array(
            '.' , '@', '_'
        );
        return $str2 = str_replace($troca2,"",$str2);
    }
    $apelido = corrige1(trim($_POST['apelido']));
    $senha = corrige1(corrige2(trim($_POST['senha'])));
    $sql = "select * from usuario where apelido='$apelido' AND senha='$senha'";
    $resultado=pg_query($sql);
    $linhas=pg_affected_rows($resultado);
    if($linhas>0){
        for($i = 0; $i < $linhas; $i++){
            $usuario = pg_fetch_array($resultado);
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['apelido'] = $usuario['apelido'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];
        }
            $_SESSION['login'] = true;
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/inicio.php'>
            <script type=\"text/javascript\">
                alert(\"Login efetuado. \");
                window.location.href = \"http://localhost/myimages/inicio.php?pesquisa=\";
            </script>
        ";
    }
    else{
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/inicio.php'>
            <script type=\"text/javascript\">
                alert(\"Nome de usuário ou senha incorretos. \");
                window.location.href = \"http://localhost/myimages/index.php\";
            </script>
        ";
    }
?>
</body>
</html>
