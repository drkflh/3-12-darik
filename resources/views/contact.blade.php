@extends('layouts.main')

@section('container')
<section class="w3l-contact py-5" id="contact">
    <div class="container py-lg-5 py-4">
        <div class="title-heading-w3 text-center mb-sm-5 mb-4">
            <h5 class="title-small">Contact Us</h5>
            <h3 class="title-style">Contact Me</h3>
        </div>
        <div class="row contact-block">
            <div class="col-md-6 contact-left pe-lg-5">
                <h3 class="mb-sm-4 mb-3">Contact Us</h3>
                <p class="cont-para mb-sm-5 mb-4">Ayo Kirimkan Masukan Anda Disini</p>
            </div>
            <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
                <form method = "POST" action="{{ route('contact.store')}}">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="inputnama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Masukan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" name="email" class="form-control" id="inputemail" placeholder="Masukan Email">
                    </div>
                    <div class="form-input">
                        <label for="inputnote">Pesan</label>

                        <textarea class="form-control" name="pesan" id="inputnote" placeholder="Masukan Pesan" style="height: 100px"></textarea>
                    </div>
                    <button type="submit" class="btn btn-style">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

    @endsection