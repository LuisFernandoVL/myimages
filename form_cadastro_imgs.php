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
    <link rel="stylesheet" href="src/styles/style-forms.css">
    <link rel="stylesheet" href="src/styles/style-footer.css">
    <title>[Site]</title>
</head>
<body>
    <nav>
        <a href="inicio.php"><div class="logo">
            
        </div></a>
        <form class="areadepesquisa" action="inicio.php" method="post">
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
        <form class="formimgs" method="POST" action="src/php/cadastrar_imgs.php" enctype="multipart/form-data">
            <div class="imgsdados">
                <div class="inserts">
                    <div class="dados">
                        <p><strong>Título:</strong></p>
                        <input type="text" name="titulo" tabindex="8" required autofocus>
                    </div>
                    <div class="dados">
                        <p><strong>Descrição:</strong></p>
                        <textarea name="descricao" cols="30" rows="5" tabindex="9"></textarea>
                        <div style="display: flex;justify-content: center;">
                            <input type="file" name="arquivo" id="arquivo" tabindex="10">
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <input type="reset" value="Cancelar" tabindex="12">
                    <input type="submit" value="Confirmar" tabindex="11">
                </div>
            </div>
        </form>
    </section>
    <footer>
        <p>Site desenvolvido por:</p>
        <p>Luis Fernando Vieira Leal</p>
    </footer>
    <script src="src/js/script.js"></script>
    <script src="src/js/script-dropdown.js"></script>
</body>
</html>