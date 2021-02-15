<?php
    $id_img=$_GET["id_img"];
    if($id_img==0){
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/inicio.php'>
            <script type=\"text/javascript\">
                alert(\"Essa imagem não foi encontrada no banco de dados. \");
                window.location.href = \"http://localhost/myimages/inicio.php\";
            </script>
        ";
        exit();
    }
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>MyImages</title>
</head>
<body>
<?php
    include_once("conectar_bd.php");
    $sql = "delete from imagem where id_imagem=$id_img and id_usuario=$id_usuario";
    $resultado = pg_query($conecta,$sql);
    $linhas = pg_affected_rows($resultado);
    if ($linhas > 0){
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/inicio.php'>
            <script type=\"text/javascript\">
                alert(\"Exclusão efetuada. \");
                window.location.href = \"http://localhost/myimages/inicio.php\";
            </script>
        ";
    }
    else{
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/inicio.php'>
            <script type=\"text/javascript\">
                alert(\"Ocorreu um erro\");
                window.location.href = \"http://localhost/myimages/inicio.php\";
            </script>
        ";
    }
    pg_close($conecta);

?>
</body>
</html>

