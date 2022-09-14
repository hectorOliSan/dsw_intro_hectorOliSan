<!DOCTYPE html>
<html lang="es">
<head>
  <title>Tabla PHP</title>
</head>
<body>
  <table>
  <tr>
    <th>Fecha</th>
    <th>Hora</th>
  </tr>
  <tr>
    <td><?php echo date("d/m/Y"); ?></td>
    <td><?php echo date("H:i:s"); ?></td>
  </tr>
</table>
</body>
</html>