# INTEGRANTES - REFATORADO
# JOSÉ RICARDO MIESSI GOMES => 21105683-2
# NATAN COLLEONI FONSECA => 21014737-2
<?php
#iniciar sessão
session_start();

# Base de Dados
include "db.php";

# Cabeçalho
include "header.php";

$rotas = [
    'cursos' => 'views/cursos.php',
    'alunos' => 'views/alunos.php',
    'matriculas' => 'views/matriculas.php',
    'inserir_aluno' => 'views/inserir_aluno.php',
    'inserir_matricula' => 'views/inserir_matricula.php',
    'inserir_curso' => 'views/inserir_curso.php',
    'nome' => 'views/home.php'
];

$pagina = $_GET['pagina'] ?? 'views/home.php'; 

if (isset($_SESSION['login']) && isset($rotas[$pagina])) {
    include $rotas[$pagina];
} else {
    include 'views/home.php';
}

# Footer
include "footer.php";
