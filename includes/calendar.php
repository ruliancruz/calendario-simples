<?php
$date = new DateTime('now', new DateTimeZone('America/Bahia'));

$firstDayOfMonth = (new DateTime(
  'first day of this month',
  new DateTimeZone('America/Bahia'))
)->format('N');

$daysInMonth = (new DateTime(
  'last day of this month',
  new DateTimeZone('America/Bahia'))
)->format('j');

function addLine($week, $currentDay) {
  echo "<tr class='border'>";

  foreach($week as $index => $day) {
    $class = $index == 6 ? 'red' : ($index == 5 ? 'bold' : '');
    $dayNumber = $day ?? '';

    if($dayNumber == $currentDay) { $class .= ($class ? ' ' : '') . 'bold'; }
    
    echo "<td class='border $class'>$dayNumber</td>";
  }

  echo "</tr>";
}

function fillCalendar($currentDay, $firstDayOfMonth, $daysInMonth) {
  $week = [];
  $startDay = $firstDayOfMonth - 1;

  for($counter = 0; $counter < $startDay; $counter++) { $week[] = null; }

  for($day = 1; $day <= $daysInMonth; $day++) {
    $week[] = $day;

    if(count($week) == 7) {
      addLine($week, $currentDay);
      $week = [];
    }
  }

  if(!empty($week)) {
    while (count($week) < 7) { $week[] = null; }
    addLine($week, $currentDay);
  }
}
?>