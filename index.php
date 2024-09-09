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

    function addLine($week) {
      echo "<tr class='border'>";

      for($counter = 0; $counter < 7; $counter++) {
        echo "<td class='border'>" . ($week[$counter] ?? '') . "</td>";
      }

      echo "</tr>";
    }

    function fillCalendar() {
      $week = [];

      for($day = 1; $day <= 31; $day++) {
        $week[] = $day;

        if(count($week) == 7) {
          addLine($week);
          $week = [];
        }
      }

      if(!empty($week)) { addLine($week); }
    }
  ?>

  <h1><?= htmlspecialchars(getGreeting($date)); ?></h1>
  <h2>Estamos em <?= $date->format('Y') ?></h2>
  <p>Agora são <?= $date->format('H') ?> horas e <?= $date->format('i') ?> minutos.</p>
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
      <?php fillCalendar() ?>
    </tbody>
  </table>
</body>
</html>