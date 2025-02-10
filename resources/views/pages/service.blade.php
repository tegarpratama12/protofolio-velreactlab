@extends('components.layout')

@section('content')

<section id="services" class="services section py-4">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="fw-bold">OUR SERVICES</h2>
        <p class="fw-bold">Explore Car Washing Services</p>
        <div class="underline mx-auto">
            <span class="line red"></span>
            <span class="line black"></span>
            <span class="line red"></span>
        </div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                <div class="service-card text-center p-4 shadow-sm w-100 d-flex flex-column">
                    <img src="/img/custom.jpg" class="img-fluid rounded" alt="Custom Web Development">
                    <div class="icon my-3"><i class="bi bi-code-slash"></i></div>
                    <h3 class="h5">Custom Web Development</h3>
                    <p class="flex-grow-1">Design and development of bespoke web solutions tailored to meet specific business requirements with a focus on performance and scalability.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                <div class="service-card text-center p-4 shadow-sm w-100 d-flex flex-column">
                    <img src="img/fullst.png" class="img-fluid rounded" alt="Full-Stack Development">
                    <div class="icon my-3"><i class="bi bi-layers"></i></div>
                    <h3 class="h5">Full-Stack Web Application Development</h3>
                    <p class="flex-grow-1">Comprehensive web application development covering both front-end and back-end technologies to deliver fully functional and dynamic web platforms.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                <div class="service-card text-center p-4 shadow-sm w-100 d-flex flex-column">
                    <img src="img/ui.png" class="img-fluid rounded" alt="UI/UX Design">
                    <div class="icon my-3"><i class="bi bi-phone"></i></div>
                    <h3 class="h5">Responsive UI/UX Design</h3>
                    <p class="flex-grow-1">Creation of intuitive and visually appealing user interfaces with a mobile-first approach to ensure seamless user experiences across all devices.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                <div class="service-card text-center p-4 shadow-sm w-100 d-flex flex-column">
                    <img src="/img/e-commerce.jpg" class="img-fluid rounded" alt="E-commerce Solutions">
                    <div class="icon my-3"><i class="bi bi-cart"></i></div>
                    <h3 class="h5">E-commerce Solutions</h3>
                    <p class="flex-grow-1">Development of secure and feature-rich online stores with seamless integration of payment gateways and inventory management systems.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                <div class="service-card text-center p-4 shadow-sm w-100 d-flex flex-column">
                    <img src="/img/api.jpg" class="img-fluid rounded" alt="API Development">
                    <div class="icon my-3"><i class="bi bi-link"></i></div>
                    <h3 class="h5">API Development and Integration</h3>
                    <p class="flex-grow-1">Building robust APIs for seamless communication between applications, ensuring smooth data exchange and enhanced system interoperability.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mx-auto mb-4 d-flex">
                <div class="service-card text-center p-4 shadow-sm w-100 d-flex flex-column">
                    <img src="/img/optimal.jpg" class="img-fluid rounded" alt="Maintenance & Support">
                    <div class="icon my-3"><i class="bi bi-tools"></i></div>
                    <h3 class="h5">Website Maintenance and Support</h3>
                    <p class="flex-grow-1">Continuous monitoring, troubleshooting, and optimization services to ensure website security, stability, and optimal performance.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="service-card text-center p-4 shadow-sm w-100 d-flex flex-column">
                    <img src="/img/deploy.jpg" class="img-fluid rounded" alt="Hosting Services">
                    <div class="icon my-3"><i class="bi bi-cloud-arrow-up"></i></div>
                    <h3 class="h5">Deployment and Hosting Services</h3>
                    <p class="flex-grow-1">Provision of reliable and scalable hosting solutions with automated deployment, high security, and continuous performance monitoring.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        offset: 50,
        delay: 0,
        once: false,
        mirror: true,
        anchorPlacement: 'top-bottom'
    });

    window.addEventListener('resize', function() {
        AOS.refresh();
    });

    window.addEventListener('orientationchange', function() {
        AOS.refresh();
    });
</script>

@endsection
