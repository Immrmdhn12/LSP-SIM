<?php 

require 'functions.php';

session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan Login Terlebih Dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if($_SESSION["roles"] != "Admin"){
    echo "
    <script type='text/javascript'>
        alert('Mohon Maaf Anda Bukan Admin, Tidak Bisa Masuk!')
        window.location = '../login/index.php';
    </script>
    ";
}


if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0 ){
        echo "
        <script type='text/javascript'>
            alert('Data Berhasil Ditambahkan');
            window.location = 'user.php'
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Gagal Ditambahkan');
            window.location = 'user.php'
        </script>
    ";
    }
}


?>

<?php require '../layout/sidebar.php'; ?>
<div id="main">
<?php require '../layout/navbar-admin.php'; ?>
<div class="content">
        <h2>Tambah Data User</h2>
        <form action="simpan_user.php" method="POST" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label><br />
            <input type="text" name="nama_lengkap" id="nama_lengkap"><br /> <br />

            <label for="username">Username</label><br >
            <input type="text" name="username" id="username"><br /> <br />

            <label for="password">Password</label><br />
            <input type="password" name="password" id="password"><br /> <br />

            <label for="foto">Foto</label><br />
            <input type="file" name="foto" id="foto"><br /> <br />

            <input type="hidden" name="roles" value="Customer"> 
            <button type="submit" name="submit">Tambah Data</button> 
        </form>
    </div>
</div>
<?php require '../layout/footer-admin.php'; ?>