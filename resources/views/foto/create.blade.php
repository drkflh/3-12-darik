@extends('layouts.app')
@section('title', 'Darik | Data Contact')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Tambah Data Gallery</h2>
                        
                    </div>
                </div>
                </div>
            </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="{{ route('Image.store') }}" method="POST" enctype="multipart/form-data">
                            
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">GAMBAR</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                
                                    <!-- error message untuk title -->
                                    @error('image')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
    
                                <div class="form-group">
                                    <label class="font-weight-bold">JUDUL GAMBAR</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Gambar">
                                
                                </div>
    
                                <div class="form-group">
                                    <label class="font-weight-bold">DESKRIPSI GAMBAR</label>
                                    <input type="text" class="form-control" name="content" value="{{ old('content') }}" placeholder="Masukkan Deskripsi Gambar">

                                </div>
    
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    
                            </form> 
                        </div>

                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection