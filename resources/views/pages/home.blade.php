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
            <div class="row p-5">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-center"><strong>Back End Developer</strong></h4>
                            <hr>
                            <div class="profile-card-2"><img src="img/index.jpg" class="img img-responsive" width="100%"
                                    alt="Profile Image">
                                <div class="profile-name">Tegar Pratama</div>
                                <div class="profile-username">@tegarprarama461@gmail.com</div>
                                <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a
                                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                            class="fa fa-linkedin"></i></a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-center"><strong>Back End Developer</strong></h4>
                            <hr>
                            <div class="profile-card-2"><img src="img/index.jpg" class="img img-responsive" width="100%"
                                    alt="Profile Image">
                                <div class="profile-name">Tegar Pratama</div>
                                <div class="profile-username">@tegarprarama461@gmail.com</div>
                                <div class="profile-icons">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i></a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-center"><strong>Back End Developer</strong></h4>
                            <hr>
                            <div class="profile-card-2"><img src="img/index.jpg" class="img img-responsive" width="100%"
                                    alt="Profile Image">
                                <div class="profile-name">Tegar Pratama</div>
                                <div class="profile-username">@tegarprarama461@gmail.com</div>
                                <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a
                                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                            class="fa fa-linkedin"></i></a></div>
                            </div>
                        </div>
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
                <h2 class="title-section">Explore Our Latest Projects</h2>
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
                            <<<<<<< HEAD <h5 class="post-title"><a href="">information systems product design study
                                    program</a></h5>
                                =======
                                <h5 class="post-title"><a href="#">information systems product design study
                                        program</a>
                                </h5>
                                >>>>>>> cccfecb (re-style home about)
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
                            <h5 class="post-title"><a href="">vehicle wash information system</a></h5>
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
                            <h5 class="post-title"><a href="">student registration system</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="" class="btn btn-primary">View All Projects</a>
            </div>
        </div>
    </div>
@endsection
