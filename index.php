<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penjualan</title>
</head>

<body>
<header>
    <h1>Sistem Database</h1>
</header>
    <div class="header">
        <div class="main"></div>
    </div>
        <h2>Table Produk</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM produk';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_prd']?></td>
                        <td><?php echo $row['nama_prd']?></td>
                        <td><?php echo $row['harga_prd']?></td>
                        <td><?php echo $row['stok_prd']?></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
        </table>
        
        <h2>Table Pembeli</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Pembeli</th>
                    <th>Nama Pembeli</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM pembeli';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['id_pmb']?></td>
                        <td><?php echo $row['nama_pmb']?></td>
                        <td><?php echo $row['no_tlf']?></td>
                        <td><?php echo $row['alamat']?></td>
                    </tr>
                </tbody>
                <?php
            }   
            ?>            
        </table>
    
        <h2>Table Transaksi</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID Produk</th>
                    <th>ID Pembeli</th>
                    <th>Jumlah Produk</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM Transaksi';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_trs']?></td>
                        <td><?php echo $row['id_prd']?></td>
                        <td><?php echo $row['id_pmb']?></td>
                        <td><?php echo $row['jml_prd']?></td>
                        <td><?php echo $row['keterangan']?></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>        
        </table>

        <h2>Table Pembayaran</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>ID Transaksi</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Jumlah Pembayaran</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM Pembayaran';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_bayar']?></td>
                        <td><?php echo $row['id_trs']?></td>
                        <td><?php echo $row['tgl_bayar']?></td>
                        <td><?php echo $row['jml_bayar']?></td>
                    </tr>
                </tbody>
                <?php
            }
             ?>           
        </table>
    <br> <br>
    <footer>
        <p>&copy; 2021 - Universitas pelita bangsa Fakultas Teknik Informatika </p>
    </footer
</body>
</html>