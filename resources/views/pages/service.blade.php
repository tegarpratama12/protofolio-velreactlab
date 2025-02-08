@extends('components.layout')

@section('content')
    <!-- AOS Animation CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Our Services</h2>

        <div class="row align-items-center mb-5 gy-4">
            <div class="col-lg-6 text-center text-lg-start" data-aos="fade-up">
                <img src="/img/costume.jpg" class="img-fluid rounded shadow mx-auto d-block" alt="Service 1" style="max-width: 90%;">
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="mt-3 mt-lg-0">Custom Laravel Development</h3>
                <p class="px-3 px-lg-0">
                    We provide high-performance Laravel development tailored to your business needs. 
                    From small startups to large enterprises, we craft scalable and secure applications.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5 gy-4 flex-lg-row-reverse">
            <div class="col-lg-6 text-center text-lg-end" data-aos="fade-up">
                <img src="/img/api.jpg" class="img-fluid rounded shadow mx-auto d-block" alt="Service 2" style="max-width: 90%;">
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="mt-3 mt-lg-0">API & Backend Development</h3>
                <p class="px-3 px-lg-0">
                    We build robust and secure API solutions, ensuring seamless data exchange between applications.
                    Enhance your web or mobile app with a powerful Laravel backend.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5 gy-4">
            <div class="col-lg-6 text-center text-lg-start" data-aos="fade-up">
                <img src="/img/optimal.jpg" class="img-fluid rounded shadow mx-auto d-block" alt="Service 3" style="max-width: 90%;">
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="mt-3 mt-lg-0">Web Performance Optimization</h3>
                <p class="px-3 px-lg-0">
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
    AOS.init({
        duration: 800, // Duration of animation
        easing: 'ease-in-out',
        offset: 50, // Offset (in px) from the original trigger point
        delay: 0, // No delay in triggering animation
        once: false, // Animations will occur every time an element scrolls into view
        mirror: true, // Animations will trigger on both scroll up and down
        anchorPlacement: 'top-bottom'
    });

    // Refresh AOS on window resize and orientation change
    window.addEventListener('resize', function() {
        AOS.refresh();
    });

    window.addEventListener('orientationchange', function() {
        AOS.refresh();
    });
</script>

@endsection