<html>
    <head>
        <title>Sucursales de la tienda</title>
    </head>
    <body>
<?php
    include ("db_conn.php");
    //Seleccionar datos
    $sql="SELECT * FROM sucursales";
    $resultado=mysqli_query($conn, $sql);

?>




        <h1>Sucursales</h1>
        <table>
            <thead>
                <tr>
                    <th>Id sucursal</th>
                    <th>Ciudad Sucursal</th>
                    <th>Telefono<th>
                        <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while($filas=mysqli_fetch_assoc($resultado)){
                ?>
            <tr>
<td><?php echo $filas['id_sucursales']?></td>
<td><?php echo $filas['ciudad_sucursales']?></td>
<td><?php echo $filas['telefono_sucursales']?></td>
<td>
<?php echo "<a href=''>EDITAR</a"; ?>

<?php echo "<a href=''>eliminar</a"; ?>

</td
</tr>
<?php
}
?>
            </tbody>
        </table>
    <?php
    mysqli_close($conn); ?>
    </body>   
</html>