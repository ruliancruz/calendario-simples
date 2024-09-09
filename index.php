<?php
require 'includes/calendar.php';
require 'includes/greetings.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendário Simples</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header>
    <h1><?= htmlspecialchars(getGreetings($date)); ?></h1>
    <h2>Estamos em <?= $date->format('Y') ?></h2>
    <p>Agora são <?= $date->format('H') ?> horas e <?= $date->format('i') ?> minutos.</p>
  </header>
  <main>
    <table class="border">
      <thead>
        <tr>
          <th>Seg</th>
          <th>Ter</th>
          <th>Qua</th>
          <th>Qui</th>
          <th>Sex</th>
          <th>Sáb</th>
          <th>Dom</th>
        </tr>
      </thead>
      <tbody>
        <?php fillCalendar($date->format('j'), $firstDayOfMonth, $daysInMonth) ?>
      </tbody>
    </table>
  </main>
</body>
</html>
