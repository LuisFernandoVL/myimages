<?php
    session_start();
    if($_SESSION['login']==true){
        $id_usuario =$_SESSION['id_usuario'];
        $apelido =$_SESSION['apelido'];
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
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
                <div class="icones inicio"tabindex="3"></div>
            </a>
            <a href="form_cadastro_imgs.php">
                <div class="icones addimg" tabindex="4"></div>
            </a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"  style="background-color:var(--cor-sombra-escura); border-radius:20%"></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="form_infosp.php">Perfil</a>
                    <a href="src/php/logout.php">Logout</a>
                </div>
            </div>
        </div>      
    </nav>
    <section>
        <form class="formcadastro" action="inicio.php" method="post">
            <!--<div class=logo>
            </div>-->
            <div class="inserts">
                <div class="dados">
                    <p><strong>Nome de usuário (apelido):</strong></p>
                    <input type="text" name="" id="" tabindex="5" value="<?php echo $apelido;?>" required autofocus readonly>
                </div>
                <div class="dados">
                    <p><strong>Nome:</strong></p>
                    <input type="text" name="" id="" tabindex="6" value="<?php echo $nome;?>" required autofocus readonly>
                </div>
                <div class="dados">
                    <p><strong>E-mail:</strong></p>
                    <input type="text" name="" id="" tabindex="7" value="<?php echo $email;?>" required autofocus readonly>
                </div>
                <div class="dados">
                    <p><strong>Senha:</strong></p>
                    <input type="password" name="" id="" tabindex="8" value="<?php echo $senha;?>" required autofocus readonly>
                </div>
                
            </div>
            <div class="buttons">
                <input type="reset" value="Cancelar" tabindex="11">
                <!--<button tabindex="9">Alterar</button>-->
                <input type="submit" value="Alterar" tabindex="10">
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