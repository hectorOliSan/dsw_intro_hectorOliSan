<!DOCTYPE html>
<html lang="es">
<head>
  <title>Tabla PHP</title>
</head>
<body>
  <h1>Título de la tabla</h1>
  <h2>Línea modificada por <b>Héctor</b></h2>
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