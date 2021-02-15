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
        <form class="formlogin" action="src/php/login.php" method="post">
            <div class=logo>
            </div>
            <div class="inserts">
                <div class="dados">
                    <p><strong>Nome de usuário:</strong></p>
                    <input type="text" name="apelido" id="apelido" tabindex="1" required autofocus autocomplete="off">
                </div>
                <div class="dados">
                    <p><strong>Senha:</strong></p>
                    <input type="password" name="senha" id="senha" tabindex="2" required autocomplete="off">
                    <div style="display: flex;justify-content: space-between;">
                        <a href="form_esqueci_senha.php" tabindex="5">Esqueci minha senha</a>
                        <a href="form_cadastro.php" tabindex="6">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <input type="reset" value="Cancelar" tabindex="4">
                <input type="submit" value="Confirmar" tabindex="3">
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