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
        <form class="areadepesquisa">            
            <input type="text" tabindex="1">
            <input type="submit" value="" tabindex="2">
        </form>
        <div class="btnsopcoes">
            <a href="inicio.php"><div class="icones" tabindex="3"></div></a>
            <a href="minhas_imgs.php"><div class="icones" tabindex="4"></div></a>
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
        <div class="posts">
            <a href="form_cadastro_imgs.php"><div class="addposts">
                <img src="" alt="">
            </div></a>
        </div>
        <div class="posts">
            <a href="mostra_imgs.php" target="_blank"><div class="imgsposts">
                <img src="" alt="">
            </div>
            <div class="detalhesposts">
                <h2>Titulo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nesciunt sequi cupiditate reiciendis voluptas alias mollitia deserunt laudantium, nam ipsam</p>
                <div class="rodapeposts"><p>Autor</p>   <p>03/02/2021 21:33</p></div>
            </div></a>
        </div>
        <div class="posts">
            <a href="mostra_imgs.php" target="_blank"><div class="imgsposts">
                <img src="" alt="">
            </div>
            <div class="detalhesposts">
                <h2>Titulo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nesciunt sequi cupiditate reiciendis voluptas alias mollitia deserunt laudantium, nam ipsam</p>
                <div class="rodapeposts"><p>Autor</p>   <p>03/02/2021 21:33</p></div>
            </div></a>
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