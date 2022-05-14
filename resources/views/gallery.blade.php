@extends('layouts.main')

@section('container')
<section class="w3l-gallery pb-5" id="gallery">
    <div class="container py-md-5 py-4">
        <div class="title-heading-w3 text-center mb-sm-5 mb-4">
            <h5 class="title-small mb-1">Gallery</h5>
            <h3 class="title-style">Berikut Merupakan Project Saya</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 item">
                <a href="{{ asset('img/warungku.png') }}" src="{{ asset('img/warungku.png') }}" data-lightbox="example-set" data-title="Project 1"
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
                <a href="{{ asset('img/bukuku.png') }}" data-lightbox="example-set" data-title="Project 2"
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