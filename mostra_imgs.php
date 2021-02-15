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
    if($_SESSION['login']==false){
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/index.php'>
            <script type=\"text/javascript\">
                window.location.href = \"http://localhost/myimages/index.php\";
            </script>
        ";
    }
    /*if(!isset($_GET['id'])){
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/inicio.php'>
            <script type=\"text/javascript\">
                alert(\"Essa imagem não foi encontrada no banco de dados. \");
                window.location.href = \"http://localhost/myimages/inicio.php\";
            </script>
        ";
        exit();
    }else{
        $id=$_GET['id'];
    }*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/style.css">
    <link rel="stylesheet" href="src/styles/style-navbar.css">
    <link rel="stylesheet" href="src/styles/style-forms.css">
    <link rel="stylesheet" href="src/styles/style-footer.css">
    <title>MyImages</title>
</head>
<body>
    <nav>
        <a href="inicio.php">
            <div class="logo"></div>
        </a>
        <form class="areadepesquisa" action="inicio.php" method="post">
            <input type="text" name="pesquisa" tabindex="1" autocomplete="off">
            <input type="submit" name="btnpesquisa" tabindex="2" value=".">
        </form>
        <div class="btnsopcoes">
            <a href="inicio.php">
                <div class="icones inicio"tabindex="3" style="background-color:var(--cor-sombra-escura); border-radius:20%"></div>
            </a>
            <a href="form_cadastro_imgs.php">
                <div class="icones addimg" tabindex="4"></div>
            </a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="form_infosp.php">Perfil</a>
                    <a href="src/php/logout.php">Logout</a>
                </div>
            </div>
        </div>      
    </nav>
    <section>
        <div class="formimgs">
        <?php
            include_once('src/php/conectar_bd.php');
            $sql = "select * from imagem where id_imagem='$id_img'";
            $resultado=pg_query($sql);
            $linhas=pg_affected_rows($resultado);
            if($linhas>0){
                while($imgdados   = pg_fetch_array($resultado)){
                    $id_imagem    = $imgdados['id_imagem'];
                    $id_usuario   = $imgdados['id_usuario'];
                    $imagem_nome  = $imgdados['imagem'];
                    $imagem       = "src/db/images/".$imgdados['imagem']."";
                    $titulo       = $imgdados['titulo'];
                    $descricao    = $imgdados['descricao'];
                    $autor        = $imgdados['autor'];
                    $datahorapost = $imgdados['datahorapost'];
                }
            }else{
                echo "
                <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/inicio.php'>
                <script type=\"text/javascript\">
                    window.location.href = \"http://localhost/myimages/inicio.php\";
                </script>
                ";
            }
            

        ?>
            <div class="mostraimgsposts">
                <img src="<?php echo $imagem;?>" class="imgresponsive">
            </div>
            <div class="imgsdados" action="" method="post">
                <div class="inserts">
                    <div class="dados">
                        <p><strong>Título:</strong></p>
                        <input type="text" name="" id="" tabindex="8" value="<?php echo $titulo;?>" readonly>
                    </div>
                    <div class="dados">
                        <p><strong>Descrição:</strong></p>
                        <input type="text" name="" id="" tabindex="9" value="<?php echo $descricao;?>" readonly>
                        <div style="display: flex;justify-content: space-between;">
                            <p><?php echo $autor;?></p>
                            <p><?php echo $datahorapost;?></p>
                        </div>
                    </div>
                </div>
                <div class="buttons_mostra">
                    <a href="src/php/excluir_imgs.php?id_img=<?php echo $id_imagem?>" tabindex="8">
                        <div class="botao" tabindex=""><p>Excluir</p></div>
                    </a>                
                    <a href="<?php echo $imagem?>" download="<?php echo $imagem_nome?>" type="image/jpg">
                        <div class="botao" tabindex=""><p>Download</p></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Site desenvolvido por:</p>
        <p>Luis Fernando Vieira Leal</p>
    </footer>
    <script src="src/js/script.js"></script>
    <script src="src/js/script-dropdown.js"></script>
</body>
</html>