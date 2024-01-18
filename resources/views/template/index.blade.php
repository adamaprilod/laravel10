@extends('layouts.lol')
@section('content')
<!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">SMK TPG 2</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">-Joyful Learning-</h2>
                        <a class="btn btn-dark" href="#about">Info Selanjutnya</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
            <div class="justify-content-center align-items-center">
                <h2 class="text-white mb-4">Tentang Kami</h2><br>
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-4 mb-3 mb-md-0" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-eye"></i>
                                    <h4 class="text-uppercase m-0">Visi</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="text-black-100 fw-bolder">Menjadi yayasan pendidikan berkualitas terbaik dan berwawasan global.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0" data-aos="fade-up"
                        data-aos-duration="3000">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-rocket"></i>
                                    <h4 class="text-uppercase m-0">Misi</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="text-black-100 fw-bolder">Mewujudkan SDM yang kompeten, sarana prasaran memadai, sistem mutakhir dan fokus pada keberhasilan siswa.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-face-smile"></i>
                                    <h4 class="text-uppercase m-0">Moto</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-100 fw-bolder">Berakhlak mulia dan inovatif.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="container px-4 px-lg-5 align-items-center justify-content-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DtyvJvqRdpY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <h4 class="text-white">Video Profile Terput 2 Bekasi</h4>
            </div>
            </div><br><br>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="Fasilitas">
        <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center"  data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/guru.png" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Sarana & Prasarana</h4>
                            <p class="text-black-100">Sekolah kami menyediakan sarana dan prasaran yang terbaik seperti 3 Gedung sekolah, Lapangan yang luas, Lahan parkir, Lab komputer dengan AC, Free WIFI, Ruang kelas yang nyaman, Tenaga pengajar terbaik, dan masih banyak lagi.</p>
                        </div>
                    </div>
        </section>
        <section class="projects-section bg-light" id="Ekskul">
            <center>
                <h1>Jurusan</h1>
            </center>
                <!-- rpl-->
                <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-5 mb-lg-0  justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/rpl.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Rekayasa Perangkat Lunak</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- otkp-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/otkp.jpeg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Otomatisasi dan Tata Kelola Perkantoran</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- mm-->
                  <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/mm.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Multimedia</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akl-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/akl.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white"> Akuntansi dan Keuangan Lembaga</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- bdp-->
                    <div class="row gx-0 mb-5 mb-lg-0  justify-content-center">
                        <div class="col-lg-6"><img class="img-fluid" src="assets/img/bdp.jpeg" alt="..." /></div>
                        <div class="col-lg-6">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-left">
                                        <h4 class="text-white">Bisnis Daring dan Pemasaran</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
        
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Alamat Sekolah</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Jl. Rajawali V Jl. Anggrek Raya No.29, RT.005/RW.023, Kayuringin Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17144</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">terput2oke@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">No Telp</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">085777835093</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.facebook.com/teratai.putihdua/"><i class="fa-brands fa-facebook"></i></a>
                    <a class="mx-2" href="https://www.youtube.com/@smkterput2oke559/featured"><i class="fa-brands fa-youtube"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/smkterput2.bekasi/"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </section>
        @endsection