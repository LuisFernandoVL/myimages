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
    include_once("conectar_bd.php");
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
    $nome = strtoupper(corrige1(corrige2(trim($_POST['nome']))));
    $email = corrige1(trim($_POST['email']));
    $senha = corrige1(corrige2(trim($_POST['senha'])));
    $conf = corrige1(corrige2(trim($_POST['conf'])));
    
    include_once("validacao_cad.php");
    
    $cadastrar = $cad;
    if($cadastrar == true){
        //Upload efetuado com sucesso. Exibe a msg
        $sql = "insert into usuario (apelido, nome, email, senha) values('$apelido','$nome','$email','$senha')";
        $resultado = pg_query($conecta,$sql);
        $linhas = pg_affected_rows($resultado);
        if ($linhas > 0){
            echo "
                <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro.php'>
                <script type=\"text/javascript\">
                    alert(\"Cadastro efetuado. \");
                    window.location.href = \"http://localhost/myimages/index.php\";
                </script>
            ";
        }
        else{
            echo "
                <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro.php'>
                <script type=\"text/javascript\">
                    alert(\"Ocorreu um erro\");
                    window.location.href = \"http://localhost/myimages/form_cadastro.php\";
                </script>
            ";
        }
        pg_close($conecta);
    }
?>
</body>
</html>