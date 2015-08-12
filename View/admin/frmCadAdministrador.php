<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="../js/verificarSenha.js"></script>
    </head>
    <body>
        <form method="post" action="../../Controller/cadastroAdmin.php" onSubmit="verificarSenha(this);return false;">
            nome:<input type="text" name="nome" id="nome"><br>
            email:<input type="text" name="email" id="email"><br>
            login:<input type="text" name="login" id="login"><br>
            senha:<input type="text" name="senha" id="senha"><br>
            Repita a senha:<input type="text" name="confirmarSenha" id="confirmarSenha"><br>
            <button type="submit">Cadastrar</button><button type="reset">Limpar</button>       
        </form>
    </body>
</html>
