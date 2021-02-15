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
    $imagem    = $_FILES['arquivo']['name'];
    $titulo    = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    include_once("validacao_imgs.php");
    $cadastrar = $cad;

    
    //Faz a verificação da extensão do arquivo
    $extensao = strtolower(end(explode('.',$_FILES['arquivo']['name'])));
    if(array_search($extensao, $_UP['extensoes'])===false){
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro_imgs.php'>
            <script type=\"text/javascript\">
                alert(\"Extensão inválida. \");
                window.location.href = \"http://localhost/myimages/form_cadastro_imgs.php\";
            </script>
        ";
    }
    //Faz a verificação do tamanho do arquivo
    else if($_UP['tamanho'] < $_FILES['arquivo']['size']){
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro_imgs.php'>
            <script type=\"text/javascript\">
                alert(\"Arquivo muito grande. \");
                window.location.href = \"http://localhost/myimages/form_cadastro_imgs.php\";
            </script>
        ";
    }
    //O arquivo será salvo
    else{
        //primeiro verifica se deve trocar o nome do arquivo
        if($_UP['renomear']==true){
            //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
            $nome_final='MyImage_'.date("Ymd").'_'.time().'.jpg';
        }else{
            //Mantém o nome original do arquivo
            $nome_final=$_FILES['arquivo']['name'];
        }
        //Verifica se é possível mover o arquivo para a pasta escolhida
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final) && $cadastrar == true){
            //Upload efetuado com sucesso. Exibe a msg
            $agora = date_create(); // Pega o momento atual
            $data = date_format($agora,'d/m/Y'); // Exibe no formato desejado
            
            $sql = "insert into imagem (id_usuario, imagem, titulo, descricao, autor, datahorapost) values('$id_usuario','$nome_final','$titulo','$descricao','$apelido','$data')";
	        $resultado = pg_query($conecta,$sql);
	        $linhas = pg_affected_rows($resultado);
            if ($linhas > 0){
                echo "
                    <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro_imgs.php'>
                    <script type=\"text/javascript\">
                        alert(\"Postagem efetuada. \");
                        window.location.href = \"http://localhost/myimages/inicio.php\";
                    </script>
                ";
            }
	        else{
                /*echo "
                    <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro_imgs.html'>
                    <script type=\"text/javascript\">
                        alert(\"Ocorreu um erro\");
                        window.location.href = \"http://localhost/myimages/form_cadastro_imgs.php\";
                    </script>
                ";*/
            }
	        pg_close($conecta);
        }
    }

?>
</body>
</html>

