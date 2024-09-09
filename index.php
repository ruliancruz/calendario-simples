<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendário Simples</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $date = new DateTime('now', new DateTimeZone('America/Bahia'));

    function getGreeting($date) {
      $hour = $date->format('H');

      if($hour >= 4 && $hour < 12) { return "Bom dia!"; }
      if($hour >= 12 && $hour < 18) { return "Boa tarde!"; }

      return "Boa noite!";
    }

    function addLine($week, $currentDay) {
      echo "<tr class='border'>";

      for($counter = 0; $counter < 7; $counter++) {
        $day = $week[$counter] ?? '';
        $class = $day == $currentDay ? 'bold' : '';
        echo "<td class='border $class'>$day</td>";
      }

      echo "</tr>";
    }

    function fillCalendar($currentDay) {
      $week = [];

      for($day = 1; $day <= 31; $day++) {
        $week[] = $day;

        if(count($week) == 7) {
          addLine($week, $currentDay);
          $week = [];
        }
      }

      if(!empty($week)) { addLine($week, $currentDay); }
    }
  ?>

  <header>
    <h1><?= htmlspecialchars(getGreeting($date)); ?></h1>
    <h2>Estamos em <?= $date->format('Y') ?></h2>
    <p>Agora são <?= $date->format('H') ?> horas e <?= $date->format('i') ?> minutos.</p>
  </header>
  <main>
    <table class="border">
      <thead>
        <tr>
          <th>Dom</th>
          <th>Seg</th>
          <th>Ter</th>
          <th>Qua</th>
          <th>Qui</th>
          <th>Sex</th>
          <th>Sab</th>
        </tr>
      </thead>
      <tbody>
        <?php fillCalendar($date->format('j')) ?>
      </tbody>
    </table>
  </main>
</body>
</html>