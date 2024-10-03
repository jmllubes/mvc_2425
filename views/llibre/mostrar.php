<table class="table" id="taula">
    <thead>
    <tr class="table-dark">
        <th>ISBN</th>
        <th>Títol</th>
        <th>Categoria</th>
        <th>Preu</th>
        <th>Editorial</th>
        <th>Autor</th>
        <th>Actualitzar</th>
        <th>Eliminar</th>

    </tr>
    </thead>
    <tbody>
    <?php 
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['Isbn']."</td>";
        echo "<td>".$row['titol']."</td>";
        echo "<td>".$row['categoria']."</td>";
        echo "<td>".$row['preu']."</td>";
        echo "<td>".$row['editorial']."</td>";
        echo "<td>".$row['autor']."</td>";
        echo "<td><a href='index.php/?controller=llibre&method=actualitzar&isbn=".$row['Isbn']."' class='btn btn-warning'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='index.php/?controller=llibre&method=eliminar&isbn=".$row['Isbn']."' class='btn btn-danger'><i class='bi bi-trash3'></i></a></td>";
        echo "</tr>";
    }
?>
</tbody>
</table>

<a href="index.php/?controller=llibre&method=insertar" class="btn btn-success">Insertar nou llibre</a>