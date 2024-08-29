<?php 
$kp=$_POST['kodePaket'];
$nama_paket=$_POST['namaPaket'];
$namaPelanggan=$_POST['namaPelanggan'];
$harga=$_POST['hargaPaket'];
$jumlahPesanan=$_POST['jumlahPesanan'];
$totalHarga=$harga*$jumlahPesanan;
$pajak=10/100*$totalHarga;
$totalbayar=$pajak+$totalHarga;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-oval {
            border-radius: 50px;
            /* Atur nilai ini untuk mengubah oval menjadi lebih besar atau lebih kecil */
            padding: 5px 15px;
            /* Sesuaikan padding untuk mempengaruhi ukuran tombol */
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 100px;
        }
        .invoice-container {
            max-width: 800px; /* Adjust the max width as needed */
            margin: 0 auto; /* Center the container horizontally */
        }
        .no-border-table td,
        .no-border-table th {
            border: none; /* Remove borders from cells */
        }
        .no-border-table {
            border-collapse: collapse; /* Ensure cells don't overlap */
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
    <div class="container mt-5 invoice-container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 text-center">
                <img src="th-removebg-preview.png" alt="" class="center">
                <h3>Struk Pemesanan</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 bg-light p-3">
                <table class="table no-border-table">
                    <tbody>
                        <tr>
                            <td><strong>Atas Nama</strong></td>
                            <td>: <?= $namaPelanggan?></td>
                        </tr>
                        <tr>
                            <td><strong>Waktu Transaksi</strong></td>
                            <td>: <?= date('d F Y h:i:s') ?></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-center">-----------------------------------------------------------------------</p>
                <div class="row justify-content-center">
                    <div class="">
                        <table class="table no-border-table">
                            <tbody>
                                <tr>
                                    <td><strong>Nama Paket</strong></td>
                                    <td>: <?= $nama_paket?></td>
                                </tr>
                                <tr>
                                <td><strong>harga</strong></td>
                                    <td>: <?= $harga ?></td>
                                </tr>
                                <tr>
                                <td><strong>Jumlah Pesanan</strong></td>
                                    <td>: <?= $jumlahPesanan ?></td>
                                </tr>
                                <tr>
                                <td><strong>Total Harga</strong></td>
                                    <td>: <?= $totalHarga ?></td>
                                </tr>
                                <tr>
                                <td><strong>Pajak</strong></td>
                                    <td>: <?= $pajak ?></td>
                                </tr>
                                <tr>
                                <td><strong>Grand Total Bayar</strong></td>
                                    <td>: <?= $totalbayar ?></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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