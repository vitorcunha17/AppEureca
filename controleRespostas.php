<html>
    <head>
        <meta charset="UTF-8">
        <title>Controle Respostas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="icon" href="imagens/favicon.ico" type="imagens/x-icon" />
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Sim', 11],
                    ['Não', 11]
                ]);

                var options = {
                    title: 'Gráfico Respostas',
                    pieHole: 0.4,
                    backgroundColor: 'transparent'//'#C9DAFF'
                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>

    </head>
    <body>
    <center>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="cadastrarPergunta.php">Cadastrar Perguntas</a></li>
                <li><a href="todasPerguntas.php">Todas as Perguntas</a></li>
                <li class="active"><a href="#">Controle de Respostas</a></li>
                <li><a href="usuariosCadastrados.php">Usuários Cadastrados</a></li>
                <li><a href="cadastrarAdmin.php">Cadastrar Administrador</a></li>
                <li><a href="processamento/logout.php">Sair</a></li>
            </ul>
        </nav>
    </center>
    <?php
    include 'processamento/conectar.php';
    $sql = "SELECT * FROM respostas ORDER BY idpergunta";
    $con = $mysqli->query($sql) or die($mysqli->error);
    ?>
    <table style="margin-top: 50px;" class="table table-hover">
        <tr class="warning">
            <td><h4><b>Id Pergunta<b/></h4></td>
            <td><h4><b>Id Usuário<b/></h4></td>
            <td><h4><b>Resposta<b/></h4></td>
            <td hidden="true"><h4><b>Id<b/></h4></td>
        </tr>
        <?php while ($dado = $con->fetch_array()) { ?> 
            <tr class="info">
                <td> <?php echo $dado["idpergunta"] ?> </td>
                <td> <?php echo $dado["idusuario"] ?> </td>
                <td> <?php echo $dado["resposta"] ?> </td>
                <td hidden="true"> <?php echo $dado["id"] ?> </td>                
            </tr> 
        <?php } ?>
    </table>
    <center><div id="donutchart" style="width: 550px; height: 350px;"></div></center>
</body>
</html>