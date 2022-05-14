
@extends('layouts.app')
@section('title', 'Darik | Data Contact')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Gallery</h2>
                        
                    </div>
                </div>
                </div>
            </div>
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                            <a href="{{ route('Image.create') }}" class="btn btn-md btn-success mb-3">TAMBAH Image</a>
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fotos as $Image)
                                    <tr>
                                            <td><img src= {{asset('fotoup/'.$Image->image)}} class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $Image->title }}</td>
                                            <td>{!! $Image->content !!}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Image.destroy', $Image->id) }}" method="POST">
                                                    <a href="{{ route('Image.edit', $Image->id) }}"<i class="fas fa-edit"></i></a> | 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  style="color:red"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr> 
                                        @empty  
                                        <div>
                                        
                                        </div>
                                    @endforelse                                  
                                </tbody>
                            </table>
                            {{ $fotos->links() }}
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