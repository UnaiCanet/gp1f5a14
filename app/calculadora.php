<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultat VPS</title>
</head>
<body>
  <h1>Resultat VPS</h1>
  <?php
    // Obté les dades del formulari
    $cpu = $_POST['cpu'];
    $ram = $_POST['ram'];
    $ssd = $_POST['ssd'];
    $os = $_POST['os'];
    $ip = isset($_POST['ip']) ? $_POST['ip'] : 'no';
    $cpu_type = isset($_POST['cpu_type']) ? $_POST['cpu_type'] : 'intel';
    $access = isset($_POST['access']) ? $_POST['access'] : 'ssh';

    // Càlcul del preu
    $preu = $cpu + ($ram * 0.1) + ($ssd / 10) + ($os === 'windows' ? 5 : 1) + ($ip === 'si' ? 2 : 0) + ($cpu_type === 'amd' ? 1 : 2) + ($access === 'web' ? 1 : ($access === 'ssh_web' ? 2 : 0));

    // Mostre el resultat
    echo "<p>Preu mensual: $preu €</p>";
  ?>
</body>
</html>
