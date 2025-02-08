@extends('components.layout')

@section('content')
    
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

@endsection
