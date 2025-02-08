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
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <!-- Bagian Gambar -->
                        <div class="col-md-6">
                            <img src="img/index.jpg" alt="Profile Image" class="img-fluid h-100 w-100"
                                style="object-fit: cover; min-height: 300px;">
                        </div>

                        <!-- Bagian Deskripsi -->
                        <div class="col-md-6">
                            <div class="card-body p-4">
                                <h3 class="card-title fw-bold mb-3">Velreact Lab</h3>
                                <p class="card-text">Velreact Lab is a team of professionals specializing in the development
                                    of modern and responsive websites. We leverage Laravel as a robust backend framework,
                                    combined with Tailwind CSS, Bootstrap, and JavaScript on the frontend to create elegant
                                    and functional user interfaces.</p>
                                <p class="card-text">Founded by three experts in the field, our team consists of Information
                                    Technology graduates with extensive experience in designing efficient, secure, and
                                    scalable digital solutions. Velreact Lab is committed to transforming your ideas into
                                    innovative, high-quality web products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end content 1 --}}
            {{-- content 2  --}}
            <div class="container my-5">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <!-- Bagian Deskripsi (Sekarang di kiri) -->
                        <div class="col-md-6 order-md-1"> <!-- Urutan pertama di layar medium ke atas -->
                            <div class="card-body p-4">
                                <h3 class="card-title fw-bold mb-3">Velreact Lab</h3>
                                <p class="card-text">Velreact Lab is a team of professionals specializing in the development
                                    of modern and responsive websites. We leverage Laravel as a robust backend framework,
                                    combined with Tailwind CSS, Bootstrap, and JavaScript on the frontend to create elegant
                                    and functional user interfaces.</p>
                                <p class="card-text">Founded by three experts in the field, our team consists of Information
                                    Technology graduates with extensive experience in designing efficient, secure, and
                                    scalable digital solutions. Velreact Lab is committed to transforming your ideas into
                                    innovative, high-quality web products.</p>
                            </div>
                        </div>

                        <!-- Bagian Gambar (Sekarang di kanan) -->
                        <div class="col-md-6 order-md-2"> <!-- Urutan kedua di layar medium ke atas -->
                            <img src="img/index.jpg" alt="Profile Image" class="img-fluid w-100 h-100"
                                style="object-fit: cover; min-height: 300px;">
                        </div>
                    </div>
                </div>
            </div>

            {{-- end content 2 --}}
            {{-- content 3 --}}
            <div class="container my-5">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <!-- Bagian Gambar -->
                        <div class="col-md-6">
                            <img src="img/index.jpg" alt="Profile Image" class="img-fluid h-100 w-100"
                                style="object-fit: cover; min-height: 300px;">
                        </div>

                        <!-- Bagian Deskripsi -->
                        <div class="col-md-6">
                            <div class="card-body p-4">
                                <h3 class="card-title fw-bold mb-3">Velreact Lab</h3>
                                <p class="card-text">Velreact Lab is a team of professionals specializing in the development
                                    of modern and responsive websites. We leverage Laravel as a robust backend framework,
                                    combined with Tailwind CSS, Bootstrap, and JavaScript on the frontend to create elegant
                                    and functional user interfaces.</p>
                                <p class="card-text">Founded by three experts in the field, our team consists of Information
                                    Technology graduates with extensive experience in designing efficient, secure, and
                                    scalable digital solutions. Velreact Lab is committed to transforming your ideas into
                                    innovative, high-quality web products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end content 3 --}}
        </div>
    </div>
@endsection
