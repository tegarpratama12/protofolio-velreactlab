@extends('components.layout')

@section('content')
    <div class="page-section" id="about">
        <div class="container">
            <h1 class="text-center fs-3 fw-bold ">About Us</h1>
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
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
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <div class="img-fluid py-3 text-center">
                        <img src="/img/about-us.gif" width="100%" alt="">
                    </div>
                </div>
            </div>
            {{-- content 1 --}}
            <div class="container my-5">
                <h1 class="text-center fs-3 fw-bold mb-4">Our Team
                    <hr class="thick-hr mt-4">
                </h1>
                <section class="light">
                    <div class="container py-2">
                        <article class="postcard light blue">
                            <a class="postcard__img_link" href="#">
                                <img class="postcard__img" src="img/index.jpg" alt="Image Title" />
                            </a>
                            <div class="postcard__text t-dark">
                                <h1 class="postcard__title blue px-2"><a href="#">Tegar Pratama</a></h1>
                                <div class="postcard__subtitle small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <p class="px-2 fw-bold">Back End <span
                                                class="text-primary span-dev px-2">Developer</span></p>
                                    </time>
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt">I am a dedicated web developer specializing in backend
                                    development, with a strong focus on utilizing the Laravel framework. In my role, I am
                                    responsible for designing, developing, and maintaining the server-side functionality of
                                    web applications. My expertise includes database management, API integration, and
                                    performance optimization, ensuring that each project is both secure and scalable. I am
                                    committed to adhering to industry best practices and continuously strive to deliver
                                    innovative, high-quality solutions that meet and exceed client expectations.</div>
                                <ul class="postcard__tagbox">
                                    <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                    <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                    <li class="tag__item play blue">
                                        <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article class="postcard light red">
                            <a class="postcard__img_link" href="#">
                                <img class="postcard__img" src="img/index.jpg" alt="Image Title" />
                            </a>
                            <div class="postcard__text t-dark">
                                <h1 class="postcard__title "><a href="#">Podcast Title</a></h1>
                                <div class="postcard__subtitle small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                    </time>
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                    doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis
                                    molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla
                                    unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                                <ul class="postcard__tagbox">
                                    <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                    <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                    <li class="tag__item play red">
                                        <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article class="postcard light green">
                            <a class="postcard__img_link" href="#">
                                <img class="postcard__img" src="img/index.jpg" alt="Image Title" />
                            </a>
                            <div class="postcard__text t-dark">
                                <h1 class="postcard__title green px-3"><a href="#">Podcast Title</a></h1>
                                <div class="postcard__subtitle small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                                    </time>
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                                    doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis
                                    molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla
                                    unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
                                <ul class="postcard__tagbox">
                                    <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                    <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                    <li class="tag__item play green">
                                        <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
