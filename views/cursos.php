<a class="btn btn-success"href="?pagina=inserir_curso" style="margin:16px auto;">Inserir novo curso</a>
<table class="table table-hover table-striped" id="cursos">
    <thead>
    <tr>
        <th>Nome curso</th>
        <th>Carga horária</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    </thead>

    <tbody>
    <?php
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['carga_horaria'].'</td>';
    ?>
            <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
            <span style="color:#FFC831;"><i class="fas fa-user-edit"></i></span></a></td>
            <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
            <span style="color:#FF3159;"><i class="fas fa-trash-alt"></span></i></a></td></tr>
    
    <?php
        }
    ?>
    </tbody>
    
</table>
