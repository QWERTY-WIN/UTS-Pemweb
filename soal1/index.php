<?php
$buku = array(
    array(
        "judul" => "Pemrograman Web dengan Laravel",
        "pengarang" => "Budi Sutejo",
        "tahun" => 2019
    ),
    array(
        "judul" => "Belajar Mandiri Python",
        "pengarang" => "Ahmad Arifin",
        "tahun" => 2010
    ),
    array(
        "judul" => "Microsoft Word untuk Penulisan Ilmiah",
        "pengarang" => "Edi Rahmadi",
        "tahun" => 2015
    )
);
?>
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
        <h2>Tabel Buku</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $index => $baris) { ?>

                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo $baris["judul"]; ?></td>
                        <td><?php echo $baris["pengarang"]; ?></td>
                        <td><?php echo $baris["tahun"]; ?></td>
                    </tr>

                <?php }; ?>

            </tbody>
        </table>
    </div>

</body>

</html>