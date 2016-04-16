<html>
    <head>
        <meta charset="UTF-8">
        <title>AppEureca</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="icon" href="imagens/favicon.ico" type="imagens/x-icon" />
    </head>
    <body>
    <center><img class="img-eureca" src="imagens/eureca.png"/></center>
    <?php
    session_start();
    if (isset($_SESSION['mensagem_login'])) {
        echo "<center><p class='alert-dangerLogin'>" . $_SESSION['mensagem_login'] . "</p></center>";
        unset($_SESSION['mensagem_login']);
    }
    ?>
    <div id="caixaLogin">
        <form id="formularioLogin"action="processamento/processamento.php" method="POST">
            <table id="loginTable">
                <tr>
                    <td class="Login">Login:</td>
                    <td><input type="text" name="login" class="form-control"  id="nome_informante" required="true"</td>
                </tr>  
                <tr>
                    <td class="Senha">Senha:</td>
                    <td><input type="password" name="senha" class="form-control"  id="senha" required="true"</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="btn btn-primary" name="action" value="Login" id="Login"/></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>