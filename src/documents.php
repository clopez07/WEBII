<?php
require 'config.php';
include 'header.php';

$query = 'SELECT d.id, d.title, d.filename, dp.name AS department
          FROM documents d
          JOIN departments dp ON d.department_id = dp.id';
$stmt = $pdo->query($query);
?>
<h2>Documentos</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Archivo</th>
      <th>Departamento</th>
    </tr>
  </thead>
  <tbody>
<?php while ($row = $stmt->fetch()): ?>
    <tr>
      <td><?= htmlspecialchars($row['id']) ?></td>
      <td><?= htmlspecialchars($row['title']) ?></td>
      <td><?= htmlspecialchars($row['filename']) ?></td>
      <td><?= htmlspecialchars($row['department']) ?></td>
    </tr>
<?php endwhile; ?>
  </tbody>
</table>
<?php
include 'footer.php';
?>
