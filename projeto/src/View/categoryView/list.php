<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Listar Categorias</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <td>#ID</td>
            <td>NOME</td>
            <td>DESCRIÇÃO</td>
        </tr>
    </thead>
    <tbody>
        <?php
            while($category = $data->fetch(\PDO::FETCH_ASSOC)){
                echo '<tr>';
                    echo '<td>'.$category['id'].'</td>';
                    echo '<td>'.$category['name'].'</td>';
                    echo '<td>'.$category['description'].'</td>';
                echo '</tr>';
            }
        
        
        ?>
    </tbody>
</table>