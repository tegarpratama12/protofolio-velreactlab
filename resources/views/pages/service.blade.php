@extends('components.layout')

@section('content')
    <!-- AOS Animation CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Our Services</h2>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <img src="/img/costume.jpg" width="80%" class="img-fluid rounded shadow" alt="Service 1">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <h3>Custom Laravel Development</h3>
                <p>
                    We provide high-performance Laravel development tailored to your business needs. 
                    From small startups to large enterprises, we craft scalable and secure applications.
                </p>
            </div>
        </div>
        

        <div class="row align-items-center mb-5 flex-lg-row-reverse">
            <div class="col-lg-6" data-aos="fade-left"  data-aos-delay="200">
                <img src="/img/api.jpg" width="80%" class="img-fluid rounded shadow" alt="Service 2">
            </div>
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <h3>API & Backend Development</h3>
                <p>
                    We build robust and secure API solutions, ensuring seamless data exchange between applications.
                    Enhance your web or mobile app with a powerful Laravel backend.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <img src="/img/optimal.jpg" width="80%" class="img-fluid rounded shadow" alt="Service 3">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <h3>Web Performance Optimization</h3>
                <p>
                    Our team optimizes website performance to improve speed, SEO, and user experience. 
                    With advanced caching, database tuning, and code refinement, we make your site lightning-fast.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init(); // Initialize AOS
</script>

@endsection
