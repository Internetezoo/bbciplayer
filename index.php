<?php
// 1. Szerver IP-címének lekérése teszteléshez
$ip_info_json = file_get_contents('https://api.myip.com');
$ip_data = json_decode($ip_info_json, true);

echo "<div style='background: #f0f0f0; padding: 10px; border-bottom: 2px solid red; font-family: sans-serif;'>";
echo "<strong>Szerver Teszt:</strong> IP: " . $ip_data['ip'] . " | Ország: " . $ip_data['country'];
echo "</div>";

// 2. A BBC iPlayer oldalának címe
$url = "https://www.bbc.co.uk/iplayer/episode/b0873q2l/jonathan-creek-daemons-roost";

// 3. Az oldal lekérése a szerver által (a brit IP-vel)
// Beállítunk egy User-Agentet, hogy ne higgye azt a BBC, hogy botok vagyunk
$options = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36\r\n"
    ]
];
$context = stream_context_create($options);
$bbc_content = file_get_contents($url, false, $context);

if ($bbc_content === false) {
    echo "<h2>Hiba: Nem sikerült betölteni a BBC oldalt a szerverről.</h2>";
} else {
    // 4. Megjelenítjük a letöltött tartalmat
    echo $bbc_content;
}
?>
