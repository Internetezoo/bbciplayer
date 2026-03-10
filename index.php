<?php
// 1. Külső IP cím lekérése egy API-tól
$ip = file_get_contents('https://api.myip.com/');

echo "<h1>Northflank PHP Teszt</h1>";
echo "<p>A szerver jelenlegi külső IP címe: <strong>" . $ip . "</strong></p>";

// 2. Link megjelenítése
$bbc_url = "https://www.bbc.co.uk/iplayer/episode/b0873q2l/jonathan-creek-daemons-roost";
echo "<p><a href='$bbc_url' target='_blank'>Kattints ide a BBC iPlayer link megnyitásához</a></p>";

// Opcionális: Automatikus átirányítás 5 másodperc után
// header("Refresh: 5; url=$bbc_url");
?>
