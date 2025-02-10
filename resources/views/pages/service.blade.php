@extends('components.layout')

@section('content')

<section id="services" class="services section"><br>

    <div class="container text-center" data-aos="fade-up">
        <h2 class="fw-bold">OUR SERVICES</h2>
        <p class="fw-bold">Explore Car Washing Services</p>
        <div class="underline mx-auto">
        <span class="line red"></span>
        <span class="line black"></span>
        <span class="line red"></span>
        </div>
    </div><br>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card">
                    <img src="img/api.jpg" alt="Service 1">
                    <div class="icon"><i class="bi bi-activity"></i></div>
                    <h3>Nesciunt Mete</h3>
                    <p>Provident nihil minus qui consequatur non omnis maiores.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <img src="img/api.jpg" alt="Service 2">
                    <div class="icon"><i class="mai-logo-broadcast"></i></div>
                    <h3>Eosle Commodi</h3>
                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <img src="img/api.jpg" alt="Service 3">
                    <div class="icon"><i class="bi bi-easel"></i></div>
                    <h3>Ledo Markt</h3>
                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.</p>
                </div>
            </div>
        </div><br>

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
