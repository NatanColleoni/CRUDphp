<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curso PHP-MYSQL</title>
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3d6be0d880.js" crossorigin="anonymous"></script>
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" alt="logo"></a>
            <div id="header_menu">
                <ul>
                    <li><a href="?pagina=cursos">Cursos</a></li>
                    <li><a href="?pagina=alunos">Alunos</a></li>
                    <li><a href="?pagina=matriculas">Matrículas</a></li>
                    <?php if(isset($_SESSION['login'])) { ?>
                    <li><a href="logout.php"><?php echo $_SESSION['usuario']; ?>(sair)</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">
    