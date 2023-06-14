<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Member Treasure Ot10</h1>
    <table border="1" collspacing="5" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Member</th>
            <th>Tanggal Lahir</th>
            <th>Golongan Darah</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_treasure as $row): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $row['nama_member'] ?> </td>
                <td><?= $row['tanggal_lahir'] ?></td>
                <td><?= $row['golongan_darah'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>