@extends('layouts.main')

@section('container')

        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="position-relative">
                        <img src="img/{{ $gambar }}" alt="{{$nama }}" class="radius-image img-fluid">
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
                                <p>{{$nama}} </p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Umur</li>
                            <li>:</li>
                            <li>
                                <p>{{$umur}}</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">No Hp</li>
                            <li>:</li>
                            <li>
                                <p>{{$nohp}}</p>
                            </li>
                        </ul>
                        <ul class="single-info">
                            <li class="name-style">Email</li>
                            <li>:</li>
                            <li>
                                <p><a href="mailto:3103120065@student.smktelkom-pwt.sch.id">{{$email}} </a></p>
                            </li>
                        </ul>
                    </div>
                    <a href="https://drive.google.com/file/d/1FouJbNt5pQR2pmIBv6cqzLE5mvE7Lqwm/view" class="btn btn-style mt-5">Download CV</a>
                </div>
            </div>
        </div>
    @endsection