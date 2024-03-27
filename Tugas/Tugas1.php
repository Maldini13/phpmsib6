<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pribadi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: khaki;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color:aqua;
            color: #fff;
            font-weight: bold;
        }
        .card-header h1 {
            margin-bottom: 0;
        }
        .card-body {
            padding: 2rem;
        }
        .card-text strong {
            width: 150px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center" >My Profile</h1>
            </div>
            <div class="card-body">
                <?php
                $name = "Andre Maldini Kurniawan";
                $email = "andremaldini73@gmail.com";
                $phone = "081389413628";
                $umur = "21 Tahun";
                $hoby = "Badminton";
                $_pekerjaan = "Mahasiswa";
                $additional_info = "Halo Semua Nama Saya Andree Maldini Kurniawan Saya tinggal di Bekasi. Saat ini saya sedang Menjalankan program Akademik 
                Fullstack Web Developer Di Mitra PT. Nurul Fikri Cipta Inovasi, Saat ini saya sedang menumpuh semester 6, Aktifitas yang sedang saya lakukan adalah melakukan studi independent dan mencari pengalaman dilingkungan kampus.";
                ?>
                <p class="card-text"><strong>Nama:</strong> <?php echo $name; ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo $email; ?></p>
                <p class="card-text"><strong>Nomor Telepon:</strong> <?php echo $phone; ?></p>
                <p class="card-text"><strong>Umur:</strong> <?php echo $umur; ?></p>
                <p class="card-text"><strong>Hoby:</strong> <?php echo $hoby; ?></p>
                <p class="card-text"><strong>Pekerjaan:</strong> <?php echo $_pekerjaan; ?></p>
                <p class="card-text"><strong>Informasi Pribadi:</strong> <?php echo $additional_info; ?></p>
            </div>
        </div>
    </div>
</body>
</html>