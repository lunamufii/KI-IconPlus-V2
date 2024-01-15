<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelas Industri | PLN Icon Plus</title>
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="shortcut icon" href="assets/images/userpremium/logo/logo_pln.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>

    <!-- navbar -->

    @include('layouts.navbar')

    @yield('content')



    <!-- custom footer -->
    {{-- FooterSection --}}
    <footer class="text-white text-center text-lg-start pt-5" style="background-color: #00616f">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <img src="assets/images/logo_footer.png" alt="PLN Icon Plus" width="120" />
                    <div>
                        <p class="text-bottom-img mt-4">“We Speak Beyond Community”</p>
                        <h3 class="fw-semibold fs-3">LET’S GET CONNECTED</h3>
                        <a class="text-decoration-none p-2" href="https://www.instagram.com/pln.iconplus_jatengdiy/"
                            target="_blank">
                            <img class="mt-3" src="assets/icons/ig_footer.png" alt="Instagram"
                                style="width: 30px; height: 30px" />
                        </a>
                        <a class="text-decoration-none p-2" href="" target="_blank">
                            <img class="mt-3" src="assets/icons/wa_footer.png" alt="WhatsApp"
                                style="width: 30px; height: 30px" />
                        </a>
                        <a class="text-decoration-none p-2" href="https://plniconplus.co.id/" target="_blank">
                            <img class="mt-3" src="assets/icons/web_footer.png" alt="Website"
                                style="width: 30px; height: 30px" />
                        </a>
                    </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <h4 class="fw-semibold fs-4 mb-4 pb-1">Hubungi Kami</h4>
                    <p>
                        <a class="text-decoration-none" style="color: #fff" href="https://goo.gl/maps/uRmhGVECLBnCadgH9"
                            target="_blank">
                            <span class="me-3">
                                <i class="bi bi-geo-alt fs-4"></i>
                            </span>
                            Jl. Setia Budi No. 96, Srondol Kulon, Banyumanik, Semarang
                        </a>
                    </p>

                    <p>
                        <a href="mailto:sbu.rjbtg@iconpln.co.id" class="text-decoration-none" style="color: #fff"
                            target="_blank">
                            <span class="me-3"><i class="bi bi-envelope fs-4"></i></span>
                            sbu.rjbtg@iconpln.co.id
                        </a>
                    </p>
                    <p>
                        <span class="me-3"><i class="bi bi-telephone fs-4"></i></span>
                        +0247620576
                    </p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h4 class="fw-semibold fs-4 mb-4 pb-3">Layanan Kami</h4>
                    <p>Internet Service Provider</p>
                    <p>Networking</p>
                    <p>Digital Product</p>
                    <p>IT Consultant</p>
                    <p>Internship Partner</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            <i class="bi bi-c-circle"></i> 2023 Copyright -
            <a class="text-white text-decoration-none" href="https://plniconplus.co.id/">PT Indonesia Comnets Plus
            </a>
            - All Rights Reserved
        </div>
        <!-- Copyright -->
    </footer>
    <!-- custom footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
