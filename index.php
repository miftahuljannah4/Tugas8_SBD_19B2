<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Transaksi Toko Alat Tulis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Belajar Sendiri</h1>
        <h2>Sistem Transaksi Barang</h2>
</header>
<div class="header">
    <div class="header-logo">Sistem Basis Data</div>
</div>
<nav>
    <a href="">Barang</a>
    <a href="">Transaksi</a>
    <a href="">Pembayaran</a>
    <a href="">Detail Transaksi</a>
</nav>
    <center><h3>Tabel Barang</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>Keterangan Barang</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  barang';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_barang']?></td>
                <td><?php echo $row['kode_barang']?></td>
                <td><?php echo $row['nama_barang']?></td>
                <td><?php echo $row['harga_barang']?></td>
                <td><?php echo $row['stok_barang']?></td>
                <td><?php echo $row['ket_barang']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <center><h3>Tabel Transaksi</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Barang</th>
                <th>ID Pembeli</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  transaksi';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['id_barang']?></td>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['tgl_transaksi']?></td>
                <td><?php echo $row['ket_transaksi']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <center><h3>Tabel Pembayaran</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>ID Transaksi</th>
                <th>Total Pembelian</th>
                <th>Harga Barang (1pcs)</th>
                <th>Total Pembayaran</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  pembayaran';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_bayar']?></td>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['total_beli']?></td>
                <td><?php echo $row['harga_barang']?></td>
                <td><?php echo $row['total_bayar']?></td>
                <td><?php echo $row['ket_beli']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <center><h3>Tabel Detail Transaksi</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>ID Transaksi</th>
                <th>ID Pembayaran</th>
                <th>Tanggal transaksi</th>
                <th>Nama Barang</th>
                <th>Total Pembayaran</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  detail_transaksi';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_barang']?></td>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['id_bayar']?></td>
                <td><?php echo $row['tgl_transaksi']?></td>
                <td><?php echo $row['nama_barang']?></td>
                <td><?php echo $row['total_bayar']?></td>
                <td><?php echo $row['ket_transaksi']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <br> <br>
    <footer>
        <p>&copy; 2021 - Sistem Basis Data</p>
    </footer>
</body>
</html>

