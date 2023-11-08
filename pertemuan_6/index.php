<?php

require 'model/Mahasiswa.php';

$mhs = new Mahasiswa();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/index.css"  />

<body>
    <table id="customers">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Hobi</th>
        </tr>
        <?php foreach ($mhs->getAll() as $k => $v) : ?>
        <tr>
            <td><?= ++$k ?></td>
            <td><?= $v['nama'] ?></td>
            <td><?= $v['nim'] ?></td>
            <td><?= $v['hobi'] ?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>
</body>

</html>