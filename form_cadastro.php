<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/style.css">
    <link rel="stylesheet" href="src/styles/style-forms.css">
    <link rel="stylesheet" href="src/styles/style-footer.css">
    <title>MyImages</title>
</head>
<body>
    <section>
        <form class="formcadastro" method="POST" action="src/php/cadastrar.php" >
            <div class=logo>
            </div>
            <div class="inserts">
                <div class="dados">
                    <p><strong>Nome de usuário (apelido):</strong></p>
                    <input type="text" name="apelido" id="apelido" tabindex="1" required autofocus autocomplete="off">
                </div>
                <div class="dados">
                    <p><strong>Nome:</strong></p>
                    <input type="text" name="nome" id="nome" tabindex="2" required autofocus autocomplete="off">
                </div>
                <div class="dados">
                    <p><strong>E-mail:</strong></p>
                    <input type="email" name="email" id="email" tabindex="3" required autofocus autocomplete="off">
                </div>
                <div class="dados">
                    <p><strong>Senha:</strong></p>
                    <input type="password" name="senha" id="senha" tabindex="4" required autocomplete="off">
                </div>
                <div class="dados">
                    <p><strong>Confirmar senha:</strong></p>
                    <input type="password" name="conf" id="conf" tabindex="5" required autocomplete="off">
                </div>
            </div>
            <div class="buttons">
                <input type="reset" value="Cancelar" tabindex="7">
                <a href="index.php" tabindex="8">Voltar ao login</a>                
                <input type="submit" value="Confirmar" tabindex="6">
            </div>
        </form>
    </section>
    <footer>
        <p>Site desenvolvido por:</p>
        <p>Luis Fernando Vieira Leal</p>
    </footer>
    <script src="src/js/script.js"></script>
</body>
</html>