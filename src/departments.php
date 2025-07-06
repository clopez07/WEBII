<?php
require 'config.php';
include 'header.php';

$stmt = $pdo->query('SELECT * FROM departments');
?>
<h2>Departamentos</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
<?php while ($row = $stmt->fetch()): ?>
    <tr>
      <td><?= htmlspecialchars($row['id']) ?></td>
      <td><?= htmlspecialchars($row['name']) ?></td>
    </tr>
<?php endwhile; ?>
  </tbody>
</table>
<?php
include 'footer.php';
?>
