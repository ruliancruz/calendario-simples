<?php
function getGreetings($date) {
  $hour = $date->format('H');

  if($hour >= 4 && $hour < 12) { return "Bom dia!"; }
  if($hour >= 12 && $hour < 18) { return "Boa tarde!"; }

  return "Boa noite!";
}
?>