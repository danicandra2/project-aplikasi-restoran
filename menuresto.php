<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-oval {
            border-radius: 50px; /* Atur nilai ini untuk mengubah oval menjadi lebih besar atau lebih kecil */
            padding: 5px 15px; /* Sesuaikan padding untuk mempengaruhi ukuran tombol */
        }
    </style>
</head>

<body>
    
  <!-- start nav -->
  
<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid bg-warning">
                <a class="navbar-brand d-flex align-items-center text-danger" href="#">
                    <img src="th-removebg-preview.png" alt="" style="height: 40px; margin-right: 10px;">
                    <span>Chigo Flip</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-dark" href="#">Ayam Cup</a></li>
                                <li><a class="dropdown-item text-dark" href="#">Ayam Original</a></li>
                                <li><a class="dropdown-item text-dark" href="#">Kopi Kenangan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-dark" href="#">Others</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Outlet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Promotion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Corporate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">News & Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn bg-danger me-2 btn-oval text-white" type="submit">Search</button> <!-- Added me-2 for spacing -->
                        <button class="btn btn-danger btn-oval" type="submit">
                            <img src="k.png" alt="" style="height: 30px;">
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>
  
<!-- end nav -->

    <!-- start carousel-->
   
    <div class="container mt-4">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="bener2.jpg" class="d-block w-100" alt=".." style="height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="rev1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="rev3.jpg" class="d-block w-100" alt="..." style="height: 500px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!-- end carousel-->


        <br class="mt-3">
        <h2 class="text-center text-danger">RECOMENDATION MENU</h2>
        <br>
        <div class="row">
            <?php
            $menupakets =
                [
                    [
                        'kode'          => 'p1',
                        'nama_paket'    => 'Paket 1 Ayam',
                        'nama_jepang'   => 'パッケージ 1 チキン',
                        'isi_paket'     => '3 Pcs Rice, <br>
                                        3 Pcs Drink , <br>
                                        3 Pcs Rice <br>',
                        'harga'         => 'Rp. 60.000',
                        'harga_paket'   => 60000,
                        'gambar'        => 'ayam1.jpg'
                       
                    ],
                    [
                        'kode'          => 'p2',
                        'nama_paket'    => 'Paket 2 Ayam',
                        'nama_jepang'   => 'パッケージ 2 チキン',
                        'isi_paket'     => '1 Pcs Chiken, <br>
                                        1 Pcs Drink , <br>
                                        3 Pcs Burger <br>',
                        'harga'         => 'Rp. 50.000',
                        'harga_paket'   => 50000,
                        'gambar'        => 'ayam2.jpg'
                        
                    ],
                    [
                        'kode'          => 'p3',
                        'nama_paket'    => 'Paket 3 Ayam',
                        'nama_jepang'    => 'パッケージ 3 チキン',
                        'isi_paket'     => '1 Pcs Chiken Cup <br>',
                        'harga'         => 'Rp. 20.000',
                        'harga_paket'   => 20000,
                        'gambar'        => 'cup1.jpg'
                         
                    ],
                    [
                        'kode'          => 'p4',
                        'nama_paket'    => 'Paket 4 Ayam',
                        'nama_jepang'    => 'パッケージ 4 チキン',
                        'isi_paket'     => '1 Pcs Chiken Cup + Rice,<br>
                                        1 pcs Drink <br> ',
                        'harga'         => 'Rp. 30.000',
                        'harga_paket'   =>  30000,
                        'gambar'        => 'cup2.jpg.'
            
                    ],
                    [
                        'kode'          => 'p5',
                        'nama_paket'    => 'Paket 5 Drink',
                        'nama_jepang'   =>'パッケージ 5ドリンク',
                        'isi_paket'     =>  '1 pcs Drink ',
                        'harga'         => 'Rp. 15.000',
                        'harga_paket'   =>  15000,
                        'gambar'        => 'kopi1.jpg.'
                    
                    ],
                    [
                        'kode'          => 'p6',
                        'nama_paket'    => 'Paket 6 Drink',
                        'nama_jepang'   => 'パッケージ 6ドリンク',
                        'isi_paket'     =>  '1 pcs Drink ',
                        'harga'         => 'Rp. 15.000',
                        'harga_paket'   =>  15000,
                        'gambar'        => 'kopi2.jpg.'
                    
                    ],
                    [
                        'kode'          => 'p4',
                        'nama_paket'    => 'Paket 7 Drink',
                        'nama_jepang'   => 'パッケージ 7ドリンク',
                        'isi_paket'     =>  '1 pcs Drink ',
                        'harga'         => 'Rp. 15.000',
                        'harga_paket'   =>  15000,
                        'gambar'        => 'kopi3.jpg.'
                         
                    ],
                    [
                        'kode'          => 'p4',
                        'nama_paket'    => 'Paket 8 Drink',
                        'isi_paket'     =>  '1 pcs Drink ',
                        'nama_jepang'   => 'パッケージ 8ドリンク',
                        'harga'         => 'Rp. 15.000',
                        'harga_paket'   => 15000,
                        'gambar'        => 'kopi4.jpg.'
                        
                    ],
                ];
            foreach ($menupakets as $data) {
            ?>

                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="<?php echo $data['gambar'] ?>" alt="....">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $data['nama_paket'] ?></h5>
                            <h5 class="card-title text-center"><?php echo $data['nama_jepang'] ?></h5>
                            <br>
                            <h5 class="card-title text-center text-danger"><?php echo $data['harga'] ?></h5>
                            <br>
                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="btn btn-danger btn-oval" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $data['kode'] ?>">
                                    Details
                                </button>
                                <button type="button" class="btn btn-warning text-light btn-oval" data-bs-toggle="modal" data-bs-target="#pesanModal<?php echo $data['kode'] ?>">
                                    + Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="detailModal<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Details <?php echo $data['nama_paket'] ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php
                                echo '<b>Composition :<br></b>';
                                echo $data['nama_paket'] . '<br>';
                                echo $data['isi_paket'] . '<br>';
                                echo '<b>Harga : Rp. ' . $data['harga_paket'] . '</b><br>';
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-oval bg-danger text-light" data-bs-dismiss="modal">Close</button>
                             
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                </div>
                <!-- Modal Pesan-->
                <div class="modal fade" id="pesanModal<?php echo $data['kode'] ?>" tabindex="-99" aria-labelledby="pesanModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="pesanModalLabel">Lengkapi Data Pesanan
                                            <?php echo $data['nama_paket'] ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="order.php" method="post"
                                            id="pesanForm<?php echo $data['kode'] ?>" target="_blank">
                                            <div class="form-group">
                                                <label for="namaPelanggan<?php echo $data['kode'] ?>" required>Nama Pelanggan</label>
                                                <input type="text" id="namaPelanggan<?php echo $data['kode'] ?>"
                                                    name="namaPelanggan" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlahPesanan<?php echo $data['kode'] ?>" required>Jumlah Pesanan</label>
                                                <input type="number" id="jumlahPesanan<?php echo $data['kode'] ?>"
                                                    name="jumlahPesanan" class="form-control" required>
                                            </div>
                                            <input type="hidden" name="kodePaket" value="<?php echo $data['kode'] ?>">
                                            <input type="hidden" name="hargaPaket"value="<?php echo $data['harga_paket'] ?>">
                                            <input type="hidden" name="namaPaket" value="<?php echo $data['nama_paket'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-oval bg-danger text-white"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-oval bg-warning text-white">Pesan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                
            <?php } ?>
        </div>
        <!-- Footer -->
        <footer
            class="text-center text-lg-start text-white bg-warning "
            style="background-color: #929fba">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                            <p>
                                <a class="text-white">MDBootstrap</a>
                            </p>
                            <p>
                                <a class="text-white">MDWordPress</a>
                            </p>
                            <p>
                                <a class="text-white">BrandFlow</a>
                            </p>
                            <p>
                                <a class="text-white">Bootstrap Angular</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 08 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 08 234 567 89</p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                            <!-- Facebook -->
                            <a
                                class="btn btn-primary btn-floating m-1"
                                style="background-color: #3b5998"
                                href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a
                                class="btn btn-primary btn-floating m-1"
                                style="background-color: #55acee"
                                href="#!"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a
                                class="btn btn-primary btn-floating m-1"
                                style="background-color: #dd4b39"
                                href="#!"
                                role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a
                                class="btn btn-primary btn-floating m-1"
                                style="background-color: #ac2bac"
                                href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a
                                class="btn btn-primary btn-floating m-1"
                                style="background-color: #0082ca"
                                href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a
                                class="btn btn-primary btn-floating m-1"
                                style="background-color: #333333"
                                href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div
                class="text-center p-3"
                style="background-color: rgba(0, 0, 0, 0.2)">
                © 2024 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">danicandra.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>