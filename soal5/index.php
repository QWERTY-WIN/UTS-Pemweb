<?php

error_reporting(0);

include "assets/spreadsheet-reader-master/SpreadsheetReader.php";

$reader = new SpreadsheetReader('dummy.xlsx');
$sheets = $reader->Sheets();

$ambil_sheet = 0;
$reader->ChangeSheet($ambil_sheet); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>JK</th>
                    <th>PRODI</th>
                    <th>ALAMAT</th>
                    <th>KOTA</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reader as $i => $kolom) :
                    if ($i == 0 || (empty($kolom[0]) && empty($kolom[1]) && empty($kolom[2])))
                        continue ?>
                    <tr>
                        <th><?= $kolom[0] ?></th>
                        <td><?= $kolom[1] ?></td>
                        <td><?= $kolom[2] ?></td>
                        <td><?= $kolom[3] ?></td>
                        <td><?= $kolom[4] ?></td>
                        <td><?= $kolom[5] ?></td>
                        <td><?= $kolom[6] ?></td>
                        <td><?= $kolom[7] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>