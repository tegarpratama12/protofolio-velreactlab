@extends('components.layout')

@section('content')
    <div class="page-section">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary"><span class="mai-pin"></span></div>
                    <p class="mb-3 font-weight-medium text-lg">Address</p>
                    <p class="mb-0 text-secondary">Bandengan, Kabupaten Jepara, Jawa Tengah</p>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
                    <p class="mb-3 font-weight-medium text-lg">Whatsapp Number</p>
                    <p class="mb-0"><a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20membuat%20website%20di%20sini"
                        target="_blank" style="display: inline-flex; align-items: center; text-decoration: none; color: white; background-color: #25D366; padding: 10px 15px; border-radius: 8px;">
                         <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 20px; margin-right: 8px;">
                         Chat via WhatsApp
                     </a></p>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
                    <p class="mb-3 font-weight-medium text-lg">Email Address</p>
                    <p class="mb-0"><a href="https://mail.google.com/mail/?view=cm&to=velreactlab@gmail.com" class="text-white btn btn-primary">Send Message</a></p>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row justify-content-center w-100">
                <div class="col-lg-6 px-0">
                    <div class="maps-container">
                        <div id="google-maps">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3963.635082776137!2d110.66822290497592!3d-6.567658079934388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzQnMDQuMCJTIDExMMKwNDAnMTQuNiJF!5e0!3m2!1sid!2sid!4v1739011632153!5m2!1sid!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

    </style>
@endsection
