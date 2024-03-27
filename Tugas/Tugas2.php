<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Form</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: khaki;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            color: #333;
        }

        .container form {
            margin-top: 20px;
        }

        .container form label {
            display: block;
            margin-bottom: 5px;
        }

        .container form input[type="text"],
        .container form input[type="number"],
        .container form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .container form input[type="submit"],
        .container form input[type="button"] {
            width: auto;
            padding: 10px 20px;
            background-color: aqua;
            color: black;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover,
        .container form input[type="button"]:hover {
            background-color: aqua;
        }

        .container h3 {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Shopping Form</h2>
        <form action="" method="POST">
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" required><br>

            <label for="produk">Produk:</label>
            <select name="produk" required>
                <option value="tempat_tidur">Tempat Tidur Rp 10.000.000</option>
                <option value="sofa">Sofa Rp 5.000.000</option>
                <option value="meja_makan">Meja Makan Rp 3.000.000</option>
                <option value="kursi">Kursi Rp 300.000</option>
            </select><br>

            <label for="jumlah_beli">Jumlah Beli:</label>
            <input type="number" name="jumlah_beli" required><br>

            <input type="submit" name="submit" value="Hitung Total">
            <input type="button" value="Batal" onclick="window.location.href=window.location.href">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $produk = $_POST['produk'];
            $jumlah_beli = $_POST['jumlah_beli'];

            // Mengambil harga dari pilihan produk
            $harga_produk = 0;
            switch ($produk) {
                case 'kasur':
                    $harga_produk = 4000000;
                    break;
                case 'sofa':
                    $harga_produk = 3000000;
                    break;
                case 'meja_makan':
                    $harga_produk = 5000000;
                    break;
                case 'kursi':
                    $harga_produk = 500000;
                    break;
                default:
                    $harga_produk = 0;
                    break;
            }

            // Menghitung total belanja
            $total_belanja = $jumlah_beli * $harga_produk;

            // Menghitung diskon
            $diskon = 0;
            if ($total_belanja >= 100000) {
                $diskon = 0.1 * $total_belanja;
            } elseif ($total_belanja >= 50000) {
                $diskon = 0.05 * $total_belanja;
            }

            // Menghitung total setelah diskon
            $total_setelah_diskon = $total_belanja - $diskon;

            // Menghitung PPN
            $ppn = 0.1 * $total_setelah_diskon;

            // Menghitung harga bersih
            $harga_bersih = $total_setelah_diskon + $ppn;

            // Menampilkan ringkasan pembelian
            echo "<h3>Ringkasan Pembelian</h3>";
            echo "Nama Pelanggan: $nama_pelanggan<br>";
            echo "Produk: $produk<br>";
            echo "Jumlah Beli: $jumlah_beli<br>";
            echo "Harga Satuan: " . number_format($harga_produk, 0, ',', '.') . "<br>";
            echo "Total Belanja: " . number_format($total_belanja, 0, ',', '.') . "<br>";
            echo "Diskon: " . number_format($diskon, 0, ',', '.') . "<br>";
            echo "PPN (10%): " . number_format($ppn, 0, ',', '.') . "<br>";
            echo "Harga Bersih: " . number_format($harga_bersih, 0, ',', '.');
        }
        ?>
    </div>
</body>
</html>