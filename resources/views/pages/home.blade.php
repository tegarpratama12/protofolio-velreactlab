@extends('components.layout')

@section('content')
    @include('components.header')
    <div class="page-section">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Our Team</div>
                <h2 class="title-section">Strong Together, Creating Impactful Web Solutions.</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-service wow fadeInUp">
                        <div class="header text-center">
                            <img src="img/index.jpg" class="img-fluid rounded-circle profile-img" alt="Profile Image">
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">Tegar Pratama</h5>
                            <p>Handling backend development with Laravel for efficient and scalable solutions.</p>

                            <div class="d-flex justify-content-center">
                                <ul class="list-unstyled d-flex m-0 p-0">
                                    <li class="mx-3"> <!-- Memberikan margin horizontal -->
                                        <a href="#">
                                            <img src="img/ig.svg" class="icon-hover" width="50" alt="Instagram Icon">
                                        </a>
                                    </li>
                                    <li class="mx-3"> <!-- Jarak antar ikon -->
                                        <a href="#">
                                            <img src="img/github.svg" class="icon-hover" width="50" alt="GitHub Icon">
                                        </a>
                                    </li>
                                    <li class="mx-3"> <!-- Jarak antar ikon -->
                                        <a href="#">
                                            <img src="img/linkin.svg" class="icon-hover" width="50" alt="LinkedIn Icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-service wow fadeInUp">
                        <div class="header text-center">
                            <img src="img/index.jpg" class="img-fluid rounded-circle profile-img" alt="Profile Image">
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">Wildan Abdun Naseer</h5>
                            <p>Handling backend development with Laravel for efficient and scalable solutions.</p>

                            <div class="d-flex justify-content-center">
                                <ul class="list-unstyled d-flex m-0 p-0">
                                    <li class="mx-3"> <!-- Memberikan margin horizontal -->
                                        <a href="#">
                                            <img src="img/ig.svg" class="icon-hover" width="50" alt="Instagram Icon">
                                        </a>
                                    </li>
                                    <li class="mx-3"> <!-- Jarak antar ikon -->
                                        <a href="#">
                                            <img src="img/github.svg" class="icon-hover" width="50" alt="GitHub Icon">
                                        </a>
                                    </li>
                                    <li class="mx-3"> <!-- Jarak antar ikon -->
                                        <a href="#">
                                            <img src="img/linkin.svg" class="icon-hover" width="50" alt="LinkedIn Icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-service wow fadeInUp">
                        <div class="header text-center">
                            <img src="img/index.jpg" class="img-fluid rounded-circle profile-img" alt="Profile Image">
                        </div>
                        <div class="body">
                            <h5 class="text-secondary">Naufal Ulum</h5>
                            <p>Handling backend development with Laravel for efficient and scalable solutions.</p>

                            <div class="d-flex justify-content-center">
                                <ul class="list-unstyled d-flex m-0 p-0">
                                    <li class="mx-3"> <!-- Memberikan margin horizontal -->
                                        <a href="#">
                                            <img src="img/ig.svg" class="icon-hover" width="50" alt="Instagram Icon">
                                        </a>
                                    </li>
                                    <li class="mx-3"> <!-- Jarak antar ikon -->
                                        <a href="#">
                                            <img src="img/github.svg" class="icon-hover" width="50" alt="GitHub Icon">
                                        </a>
                                    </li>
                                    <li class="mx-3"> <!-- Jarak antar ikon -->
                                        <a href="#">
                                            <img src="img/linkin.svg" class="icon-hover" width="50" alt="LinkedIn Icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <span class="subhead">About us</span>
                    <h2 class="title-section">Crafting Modern Web Solutions with Precision and Innovation.</h2>
                    <div class="divider"></div>

                    <p>Velreact Lab is a team of professionals specializing in the development of modern and
                        responsive
                        websites. We leverage Laravel as a robust backend framework, combined with Tailwind CSS,
                        Bootstrap, and JavaScript on the frontend to create elegant and functional user interfaces.
                    </p>
                    <p>Founded by three experts in the field, our team consists of Information Technology graduates
                        with
                        extensive experience in designing efficient, secure, and scalable digital solutions.
                        Velreact
                        Lab is committed to transforming your ideas into innovative, high-quality web products.</p>
                    <a href="about.html" class="btn btn-primary mt-3">Read More</a>
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <div class="img-fluid py-3 text-center">
                        <img src="/img/about-us.gif" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section bg-light">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Our Skills</div>
                <h2 class="title-section">What is our team's approach to website development </h2>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <img src="img/reactjs.svg" width="60%" alt="">
                        </div>
                        <h5>React Js</h5>
                        <p>Developing fast, responsive, and intuitive user interfaces for modern web applications.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <img src="img/tailwind.svg" width="60%" alt="">
                        </div>
                        <h5>Tailwind CSS</h5>
                        <p>Crafting pixel-perfect, responsive designs with unparalleled speed and flexibility.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <img src="img/js.svg" width="60%" alt="">
                        </div>
                        <h5>JavaScript</h5>
                        <p>Bringing websites to life with dynamic, interactive, and seamless user experiences.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                    <div class="features">
                        <div class="header mb-3">
                            <img src="img/laravel-2.svg" width="60%" alt="">
                        </div>
                        <h5>Laravel</h5>
                        <p>Empowering robust, secure, and scalable web applications with elegant backend architecture.</p>
                    </div>
                </div>
            </div>

        </div> <!-- .container -->
    </div> <!-- .page-section -->
    <!-- Blog -->
    <div class="page-section">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Our Project</div>
                <h2 class="title-section">Explore Our Projects</h2>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="/img/1.desain-produk.png" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#">information systems product design study program</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="/img/2.auto-wash.png" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#">vehicle wash information system</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="/img/3.pendaftaran-mhs.png" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="#">student registration system</a></h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
