<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>    


    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1> Welcome to UrbanChic </h1>
            <h3>Mau Cari Apa?</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Produk" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type= "submit" class="btn warna3 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- highlighted kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-hoodie d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Hoodie">Hoodie</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                       <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Baju Pria">Baju Pria</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center align-items-center">
                       <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Baju Wanita">Baju Wanita</a></h4>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about us -->
    <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>About Us</h3>
            <p class="fs-5 mt-3">
            Selamat datang di UrbanChic, rumah bagi pencinta gaya perkotaan yang membumi dan penuh gaya. Sejak berdiri, UrbanChic telah menjadi penjelajah tak kenal lelah di dunia fashion, menggabungkan kegelapan dan cahaya kota dalam setiap jahitan kami. Di hati UrbanChic, kami tidak hanya menjual pakaian, tetapi juga menceritakan kisah gaya hidup perkotaan yang penuh semangat dan keberanian.
            </p>
        </div>
    </div>

    <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
            <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                            <p class="card-text text-harga">Rp<?php echo $data['harga']; ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="btn btn-outline-primary mt-3" href="produk.php">See More</a>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>