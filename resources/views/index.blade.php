@extends('layouts.main')

@section('container')
<section class="w3l-banner py-5" id="home">
    <div class="row align-items-center pt-4">
        <div class="col-md-6 banner-left pe-xl-5">
            <h4>Hallo, Saya Darik Aflah A.A</h4>
            <p class="banner-sub me-md-5"> Full Stack Developer & UI / UX Designer
            </p>
            <div class="d-flex align-items-center buttons-banner mt-sm-5 mt-4">
                <a href="/about" class="btn btn-style me-2">About Me</a>
            </div>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</section>
<div class="container py-md-5 py-4">
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="position-relative">
                <img src="{{asset('img/darikk.png')}}" class="radius-image img-fluid">
            </div>
        </div>
        <div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
            <h5 class="title-small mb-1">About Me</h5>
            <h3 class="title-style">Tentang Saya</h3>
            <p class="mt-3">Hai, Saya Darik Aflah Aufah Arisianto,  Junior Full Stack Developer - Desainer UI/UX </p>
            <div>
                <p>                        Saya bersekolah di SMK Telkom Purwokerto</p>
            </div>
            <div class="my-info mt-md-5 mt-4">
                <ul class="single-info">
                    <li class="name-style">Nama</li>
                    <li>:</li>
                    <li>
                        <p>Darik Aflah Aufah Arisianto</p>
                    </li>
                </ul>
                <ul class="single-info">
                    <li class="name-style">Umur</li>
                    <li>:</li>
                    <li>
                        <p>16 Tahun</p>
                    </li>
                </ul>
                <ul class="single-info">
                    <li class="name-style">No Hp</li>
                    <li>:</li>
                    <li>
                        <p>+62 821-3695-1197</p>
                    </li>
                </ul>
                <ul class="single-info">
                    <li class="name-style">Email</li>
                    <li>:</li>
                    <li>
                        <p><a href="mailto:3103120065@student.smktelkom-pwt.sch.id">3103120065@student.smktelkom-pwt.sch.id</a></p>
                    </li>
                </ul>
            </div>
            <a href="https://drive.google.com/file/d/1FouJbNt5pQR2pmIBv6cqzLE5mvE7Lqwm/view" class="btn btn-style mt-5">Download CV</a>
        </div>
    </div>
</div>
<section class="w3l-gallery pb-5" id="gallery">
    <div class="container py-md-5 py-4">
        <div class="title-heading-w3 text-center mb-sm-5 mb-4">
            <h5 class="title-small mb-1">Gallery</h5>
            <h3 class="title-style">Berikut Merupakan Project Saya</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 item">
                <a href="assets/images/g1.jpg" data-lightbox="example-set" data-title="Project 1"
                    class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{ asset('img/warungku.png') }}" alt="Warungku">
                    <span class="overlay__hover"></span>
                    <span class="hover-content">
                        <span class="title">Warungku</span>
                        <span class="content">Design App</span>
                    </span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 item mt-md-0 mt-4">
                <a href="assets/images/g2.jpg" data-lightbox="example-set" data-title="Project 2"
                    class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{ asset('img/bukuku.png') }}"alt="Bukuku">
                    <span class="overlay__hover"></span>
                    <span class="hover-content">
                        <span class="title">App Bukuku</span>
                        <span class="content">Build With Kotlin</span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 item mt-lg-0 mt-4">
                <a href="assets/images/g3.jpg" data-lightbox="example-set" data-title="Project 3"
                    class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{ asset('img/tejoacc.png') }}" alt="Tejo Acc">
                    <span class="overlay__hover"></span>
                    <span class="hover-content">
                        <span class="title">Landing Page Tejo Acc</span>
                        <span class="content">Build With Bootsrap 4</span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                <a href="assets/images/g5.jpg" data-lightbox="example-set" data-title="Project 4"
                    class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{ asset('img/kalkulator.png') }}" alt="Kalkulator">
                    <span class="overlay__hover"></span>
                    <span class="hover-content">
                        <span class="title">Web Kalkulator</span>
                        <span class="content">Build With JavaScript</span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                <a href="assets/images/g6.jpg" data-lightbox="example-set" data-title="Project 5"
                    class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{ asset('img/gadgetstore.png') }}" alt="GadgetStore">
                    <span class="overlay__hover"></span>
                    <span class="hover-content">
                        <span class="title">Gadget Store</span>
                        <span class="content">Build With Bootstrap 4 & PHP </span>
                    </span>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                <a href="assets/images/g4.jpg" data-lightbox="example-set" data-title="Project 6"
                    class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{ asset('img/inventory.png') }}" alt="Aplikasi Inventory">
                    <span class="overlay__hover"></span>
                    <span class="hover-content">
                        <span class="title">Tejo Acc Management System</span>
                        <span class="content">Build With C#</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
    @endsection