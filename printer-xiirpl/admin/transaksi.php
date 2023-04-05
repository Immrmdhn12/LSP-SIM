<?php
require 'functions.php';

session_start();

if (!isset($_SESSION["username"])) {
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if ($_SESSION["roles"] != "Admin") {
    echo "
    <script type='text/javascript'>
        alert('Mohon maaf anda bukan admin, enggak bisa masuk kesini!')
        window.location = '../login/index.php';
    </script>
    ";
}


$transaksi = query("SELECT * FROM transaksi WHERE status = 'Proses'");
$verifikasi = query("SELECT * FROM transaksi WHERE status = 'Terverifikasi'");
$tolak = query("SELECT * FROM transaksi WHERE status = 'Ditolak'");

?>

<?php require '../layout/sidebar.php'; ?>
<div id="main">
<?php require '../layout/navbar-admin.php'; ?>
<div class="content">
    <h1>Data Transaksi</h1>
    <hr>
    <h3>Produk Request</h3>
    <table class="table table-responsive table-hover mb-5">
        <tr>
            <th>No.</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Nomor Whatsapp</th>
            <th>Produk Yang Dipesan</th>
            <th>Total Harga</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($transaksi as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["tanggal_transaksi"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td><?= $data["nomor_whatsapp"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp.<?= number_format($data["subtotal"]); ?></td>
                <td><img src="../image/<?= $data["foto"]; ?>" alt="" width="70"></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <a class="btn btn-success" href="verifikasi.php?id=<?= $data["id_transaksi"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin VeriFikasi Pesanan?');"><i class="fa-solid fa-check"></i></a>
                    <a class="btn btn-danger" href="tolak.php?id=<?= $data["id_transaksi"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menolak Pesanan?');"><i class="fa-solid fa-xmark"></i></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <h3>Produk Selesai - Terverifikasi</h3>
    <table class="table table-responsive table-hover mb-5">
        <tr>
            <th>No.</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Nomor Whatsapp</th>
            <th>Produk Yang Dipesan</th>
            <th>Total Harga</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($verifikasi as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["tanggal_transaksi"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td><?= $data["nomor_whatsapp"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp.<?= number_format($data["subtotal"]); ?></td>
                <td><img src="../image/<?= $data["foto"]; ?>" alt="" width="70"></td>
                <td><?= $data["status"]; ?></td>
                <td><a class="btn btn-danger my-2" href="hapus_transaksi.php?id=<?= $data["id_transaksi"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <h3>Produk Selesai - Ditolak</h3>
    <table class="table table-responsive table-hover mb-5">
        <tr>
            <th>No.</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Nomor Whatsapp</th>
            <th>Produk Yang Dipesan</th>
            <th>Total Harga</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($tolak as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["tanggal_transaksi"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td><?= $data["nomor_whatsapp"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp.<?= number_format($data["subtotal"]); ?></td>
                <td><img src="../image/<?= $data["foto"]; ?>" alt="" width="70"></td>
                <td><?= $data["status"]; ?></td>
                <td><a class="btn btn-danger" href="hapus_transaksi.php?id=<?= $data["id_transaksi"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');"><i class="fa-solid fa-xmark"></i></a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    
</div>
</div>
<?php require '../layout/footer-admin.php'; ?>