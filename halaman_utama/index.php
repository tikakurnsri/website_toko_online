<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Home</title>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php require "navbar.php"; ?>
    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Toko Online Fashion</h1>
            <h3>Anda Ingin Mencari Apa?</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-5">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna2 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- highlighted kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3> Kategori Terlaris </h3> 
        
            
            <div class="row mt-3"></div>
            <div class="col-4">
                <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center
                align-items-top">
                </div>
            </div>

            <div class="col-4">
                <div class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center
                align-items-top">
                </div>
            </div>

            <div class="col-4">
                <div class="highlighted-kategori kategori-baju-anak-anak  d-flex justify-content-center
                align-items-top">
                </div>
            </div>
            

        </div>

        <!-- tentang kami -->
        <div class="container-fluid warna3 py-5"></div>
            <div class="container text-center">
                <h3> Tentang kami </h3>
                <p class="fs5-5 mt-3">


                </p>
    </div>

    <!-- produk -->
        <div class="container-fluid warna3 py-5"></div>
            <div class="container text-center">
                <h3>Produk</h3>

                <dic class="row mt-5">
                    <div class="col-md-4">
                        <img src="bajupria2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-tittle">Card Title</h5>
                        <p class="card-text"> Some quick example build on the card titile and
                            make up the bultk of the card's content.</p>
                            <a href="#"> class="btn btn-primary">Go somewhere</a>

                    </div>
                    </div>

                    <dic class="row mt-5">
                    <div class="col-md-4">
                        <img src="bajupria2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-tittle">Card Title</h5>
                        <p class="card-text"> Some quick example build on the card titile and
                            make up the bultk of the card's content.</p>
                            <a href="#"> class="btn btn-primary">Go somewhere</a>

                    </div>
                    </div>

                    <dic class="row mt-5">
                    <div class="col-md-4">
                        <img src="bajupria2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-tittle">Card Title</h5>
                        <p class="card-text"> Some quick example build on the card titile and
                            make up the bultk of the card's content.</p>
                            <a href="#"> class="btn btn-primary">Go somewhere</a>

                    </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
