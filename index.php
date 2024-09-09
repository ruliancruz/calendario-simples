<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendário Simples</title>
</head>
<body>
  <?php
    function getGreeting() {
      $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
      $hour = $date->format('H');

      if($hour >= 4 && $hour < 12) { return "Bom dia!"; }
      if($hour >= 12 && $hour < 18) { return "Boa tarde!"; }

      return "Boa noite!";
    }
  ?>
  <h1><?= htmlspecialchars(getGreeting()); ?></h1>
</body>
</html>