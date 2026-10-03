<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Stock</th>
</tr>
<?php if (isset($productos) && $productos): ?>
    <?php while($row = $productos->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nombre']; ?></td>
        <td><?= $row['precio']; ?></td>
        <td><?= $row['stock']; ?></td>
    </tr>
    <?php endwhile; ?>
<?php else: ?>
    <tr>
        <td colspan="4">No hay productos disponibles.</td>
    </tr>
<?php endif; ?>
</table>