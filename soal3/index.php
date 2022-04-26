<?php
$data = file_get_contents("jualan.json");
$data = json_decode($data);
function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header {
            height: 350px;
            overflow: hidden;
            margin: 5px;
            position: relative;
        }

        img {
            position: absolute;
            left: -1000%;
            right: -1000%;
            top: -1000%;
            bottom: -1000%;
            margin: auto;
            min-height: 100%;
            min-width: 100%;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <?php foreach ($data as $value) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <img class="d-block mx-auto" src="<?php echo $value->gambar; ?>" alt="" srcset="">
                        </div>
                        <div class="card-body">
                            <h1 class="text-center pb-2"><?php echo $value->Name; ?></h1>
                            <p><b>Ukuran : </b><?php echo $value->ukuran; ?></p>
                            <p><b>Ukuran : </b><?php echo implode(", ", $value->warna) ?></p>
                            <p><b>Email : </b><?php echo $value->Contact->email; ?></p>
                            <p><b>No.Telp : </b><?php echo $value->Contact->Phone; ?></p>
                            <p><b>Alamat : </b><?php echo $value->Contact->Address; ?></p>
                            <button class="btn btn-primary">Detalis!</button>
                            <h3 class="text-center"><b><?php echo rupiah($value->harga); ?></b></h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>

</body>

</html>