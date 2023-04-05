<?php 
include 'layout/navbar.php';
?>
<?php $produk = query("SELECT * FROM produk"); ?>

<div id="home" class="produk container">
<div id="carouselExampleSlidesOnly" class="my-3 carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="assets/images/banner 1.png" class="d-block w-100" alt="Foto 1">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/images/banner 2.jpg" class="d-block w-100" alt="Foto 2">
    </div>
    <div class="carousel-item" data-bs-interval="2000s">
      <img src="assets/images/banner 4.jpeg" class="d-block w-100" alt="Foto 3">
    </div>
  </div>
</div>
    <h2 class="my-3">Produk Yang Tersedia</h2>
    <div class="row">
        <?php $i = 1;?>
        <?php foreach($produk as $data) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="image/<?= $data['foto']; ?>" class="card-img-top" alt="<?= $data['nama_produk']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama_produk']; ?></h5>
                    <p class="card-text"><?= $data['deskripsi']; ?></p>
                    <hr>
                    <h6 class="card-text"><b>Harga :</b> Rp. <?= number_format($data['harga'], 0, ',', '.'); ?></h6>
                    <p class="text-secondary">Tersisa : <?= $data['stok']; ?></p>
                    <a href="detail.php?id=<?= $data["id_produk"]; ?>" class="btn btn-success"><i class="fa-solid fa-basket-shopping me-3"></i>Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
include 'layout/footer.php';?>
?>