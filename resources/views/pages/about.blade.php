@extends('components.layout')

@section('content')
    <div class="page-section" id="about">
        <div class="container">
            <h1 class="text-center fs-3 fw-bold ">About VelReavt <span class="text-primary">.Lab</span></h1>
            <div class="row align-items-center">
                <div class="col py-5 wow fadeInUp px-4">
                    <article class="text-justify text-muted fs-5 lh-lg">
                        In collaboration with two colleagues, I co-founded an organization dedicated to providing top-tier
                        website development services utilizing modern frameworks and technologies such as Laravel, Tailwind
                        CSS, Bootstrap, ReactJS, and JavaScript. Our organization, Velreact Lab, derives its name from a
                        fusion of <span class="text-primary">Laravel</span> and <span class="text-danger">ReactJS</span>, two
                        powerful technologies that have significantly shaped our
                        approach to web development.

                        The inception of Velreact Lab was inspired by our collective passion for innovative web solutions
                        and
                        a shared recognition of the growing demand for efficient, responsive, and visually appealing digital
                        platforms. We observed that many individuals and businesses were in need of robust, clean, and
                        meticulously crafted websites that could keep pace with the evolving digital landscape. This
                        realization motivated us to combine our skills and experiences to create a company that not only
                        builds websites but also partners with clients to elevate their online presence.

                        At Velreact Lab, our mission is to deliver websites that are not only clean, well-structured, and
                        fast but also tailored to meet the unique needs of each client—whether they are individuals,
                        startups, or established enterprises. We pride ourselves on our commitment to quality and customer
                        satisfaction, ensuring that every project we undertake adheres to the highest standards of
                        performance and design. Our journey reflects a dedication to merging innovative design with robust
                        functionality, empowering our clients with digital tools that drive growth and success in today’s
                        competitive market.
                    </article>
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
                                    <li class="tag__item">
                                        <a href="https://www.instagram.com/tegar.pratama_12/">
                                            <i class="bi bi-instagram"></i> Instagram
                                        </a>
                                    </li>
                                    <li class="tag__item">
                                        <a href="https://www.linkedin.com/in/tegarpratama1099">
                                            <i class="bi bi-linkedin"></i> Linkedin
                                    </li>
                                    </a>
                                    <li class="tag__item play blue">
                                        <a href="https://github.com/tegarpratama12"><i class="bi bi-github"></i> Github</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article class="postcard light red">
                            <a class="postcard__img_link" href="#">
                                <img class="postcard__img" src="{{ asset('img/profile-wan.jpeg') }}" alt="Image Title" />
                            </a>
                            <div class="postcard__text t-dark">
                                <h1 class="postcard__title "><a href="#">Wildan Abdun Naseer</a></h1>
                                <div class="postcard__subtitle small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <p class="px-2 fw-bold">Full Stack <span
                                                class="text-primary span-dev px-2">Developer</span></p>
                                    </time>
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt">I am a full-stack web developer specializing in
                                    Laravel. I am responsible for end-to-end web application development, including
                                    database design and management, API development, and performance optimization to
                                    ensure secure, efficient, and scalable applications. With expertise in both frontend
                                    and backend technologies, I integrate modern tools to create innovative solutions that
                                    meet user needs and industry standards. I am committed to continuous learning and
                                    delivering high-quality applications by following best practices in software development.
                                </div>
                                <ul class="postcard__tagbox">
                                    <li class="tag__item">
                                        <a href="https://www.instagram.com/w.a.n_wd/">
                                            <i class="bi bi-instagram"></i> Instagram
                                        </a>
                                    </li>
                                    <li class="tag__item">
                                        <a href="https://www.linkedin.com/in/wildan-abdun-naseer-803a60326">
                                            <i class="bi bi-linkedin"></i> Linkedin
                                    </li>
                                    </a>
                                    <li class="tag__item play blue">
                                        <a href="https://github.com/wildun19">
                                            <i class="bi bi-github"></i> Github</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article class="postcard light green">
                            <a class="postcard__img_link" href="#">
                                <img class="postcard__img" src="img/profile-no.jpg" alt="Image Title" />
                            </a>
                            <div class="postcard__text t-dark">
                                <h1 class="postcard__title green px-3"><a href="#">Naufal Ulum</a></h1>
                                <div class="postcard__subtitle small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <p class="px-2 fw-bold">Front End <span
                                                class="text-primary span-dev px-2">Developer</span></p>
                                    </time>
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt">I am a frontend web developer with a strong focus on creating dynamic, user-friendly, and visually appealing interfaces. Specializing in modern frontend technologies, I develop responsive and interactive web applications that provide seamless user experiences. My expertise includes HTML, CSS, JavaScript, and frameworks , ensuring high performance and compatibility across various devices. I am passionate about crafting intuitive designs and implementing best practices in UI/UX to enhance usability and engagement. Committed to continuous learning, I strive to deliver high-quality solutions that align with industry standards and user expectations.</div>
                                <ul class="postcard__tagbox">
                                    <li class="tag__item">
                                        <a href="https://www.instagram.com/nofall43/">
                                            <i class="bi bi-instagram"></i> Instagram
                                        </a>
                                    </li>
                                    <li class="tag__item">
                                        <a href="/">
                                            <i class="bi bi-linkedin"></i> Linkedin
                                    </li>
                                    </a>
                                    <li class="tag__item play blue">
                                        <a href="https://github.com/4naufalulum">
                                            <i class="bi bi-github"></i> Github</a>
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
