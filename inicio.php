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
    <link rel="stylesheet" href="src/styles/style.css">
    <link rel="stylesheet" href="src/styles/style-navbar.css">
    <link rel="stylesheet" href="src/styles/style-contents.css">
    <link rel="stylesheet" href="src/styles/style-footer.css">
    <title>[Site]</title>
</head>
<body>
    <nav>
        <a href="inicio.php"><div class="logo">
            
        </div></a>
        <form class="areadepesquisa" action="" method="post">
            <input type="text" name="pesquisa" tabindex="1">
            <input type="submit" name="btnpesquisa" tabindex="2">
        </form>
        <div class="btnsopcoes">
            <a href="inicio.php"><div class="icones" tabindex="3"></div></a>
            <a href="form_cadastro_imgs.php"><div class="icones" tabindex="4"></div></a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">D</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="form_infosp.php">Perfil</a>
                    <a href="src/php/logout.php">Logout</a>
                </div>
            </div>
        </div>      
    </nav>
    <section>
        <?php
            include_once('src/php/conectar_bd.php');
            $btnpesquisa=filter_input(INPUT_POST, 'btnpesquisa', FILTER_SANITIZE_STRING);
            if($btnpesquisa){
                $pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
                $sql = "select * from imagem where autor='$apelido' and titulo like '%$pesquisa%' or descricao like '%$pesquisa%' or autor like '%$pesquisa%' order by id_imagem";
            }
            else{
                $sql = "select * from imagem where autor='$apelido' order by id_imagem";
            }
            $resultado=pg_query($sql);
            $linhas=pg_affected_rows($resultado);
            if($linhas>0){
                while($imgdados   = pg_fetch_array($resultado)){
                    $id_imagem    = $imgdados['id_imagem'];
                    $imagem       = "src/db/images/".$imgdados['imagem']."";
                    $titulo       = $imgdados['titulo'];
                    $descricao    = $imgdados['descricao'];
                    $autor        = $imgdados['autor'];
                    $datahorapost = $imgdados['datahorapost'];

                echo "
                    <div class=".'posts'.">
                        <a href=".'mostra_imgs.php?id_img='.$id_imagem.''."><div class=".'imgsposts'.">
                            <div class=".'imgresponsive'." 
                            style=".'background-image:url('."$imagem".') no-repeat center center;'."></div>
                        </div>
                        <div class=".'detalhesposts'.">
                            <h2>".$titulo."</h2>
                            <p>".$descricao."</p>
                            <div class=".'rodapeposts'."><p>".$autor."</p>
                            <p>".$datahorapost."</p></div>
                        </div></a>
                    </div>
                    ";
                }
            }
            else{
                echo "
                    <h2>Não há nada aqui por enquanto ;-; ... Experimente cadastrar imagens</h2>
                ";
            }
            
        ?>    
    </section>
    <footer>
        <p>Site desenvolvido por:</p>
        <p>Luis Fernando Vieira Leal</p>
    </footer>
    <script src="src/js/script.js"></script>
    <script src="src/js/script-dropdown.js"></script>
</body>
</html>