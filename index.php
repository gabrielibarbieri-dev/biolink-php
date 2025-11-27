<?php

$links = [
"Instagram" => "https://instagram.com/gabbarbieri_",
"WhatsApp" => "https://wa.me/17981157253",
"Meu Jogo Favorito" => "https://play.google.com/store/apps/details?id=com.block.juggle&pcampaignid=web_share",
"Música do Momento" => "https://youtu.be/kI6ywewtYkc?si=r3kiqAnNx2Kh0DPN"
];
// ESCOLHER O LINK VIP
$vip = "Instagram";

// --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
$nome = "Gabi Barbieri";
$bio = "🌻";
$imagem = "https://plus.unsplash.com/premium_photo-1700124162812-1d5d29087b81?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"; // Pegue o link da SUA foto.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BioLink de <?php echo $nome; ?></title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">
<h1> <?php echo $nome; ?> </h1>
<p> <?php echo $bio; ?> </p>
<div class="lista-links">

<div class="area-contato">
<a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
</div>

<?php
foreach ($links as $texto => $url) {
$classe_extra = "";
if ($texto === $vip) {
    $classe_extra = "destaque";
}

echo "<a href='$url' class='btn $classe_extra' target='_blank'>$texto</a>";
}
?>
</div>

</body>
</html>