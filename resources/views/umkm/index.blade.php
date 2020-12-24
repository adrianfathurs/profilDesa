@extends('template.templatePage')
@section('content')

<!-- load css umkm -->
<!-- load css for homePage -->
<link rel="stylesheet" href="{{ asset('/css/umkm.css') }}">

<!-- jumbotron area -->
<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/banner/umkm.jpg')}});">
        <div class="desc animate-box">
            <h2>Daftar UMKM Sambirejo</h2>
            <span><a class="btn btn-primary btn-lg" href="#">Get Started</a></span>
        </div>
    </div>
</div>
<!--/ jumbotron end -->

<div class="section-wrap" style="background-color: black">
    <div class="container">
        <!-- button for modal adding umkm -->
        <div class="row">
            <button class="btn btn-success " style="float:right; margin-bottom:10px; margin-right:2%;" data-toggle="modal" data-target="#exampleModal"> Tambah </button>
        </div>
        <!-- form modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="exampleModalLabel">Input Informasi</h3>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('saveUmkm')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Judul Informasi:</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Gambar 1:</label>
                                <input type="file" class="form-control" id="photos" name="photos1">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nomor Telp. :</label>
                                <input type="number" class="form-control" id="nomor_telp" name="nomor_telp">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Url Map :</label>
                                <input type="text" class="form-control" id="url_map" name="url_map">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                                <p>Tersisa : <span id="jmlKarakter">600</span> Karakter</p>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div style="both:clear;"></div>
        <?php $j = 0; ?> @foreach($dataUmkm as $umkm)
        <p class="text-header text-center mt-3 mb-3">UMKM {{$umkm->judul}}</p>
        <hr size="100px" width="30%">
        <div class="row mbottom">
            <?php if ($j == 1) { ?>
                <div class="col-md-6 mb-4  animate-box">
                    <div id="left-content">
                        <div class="text-content">
                            <p>&nbsp;{{ $umkm->description_umkm}}</p>
                        </div>
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{ $umkm->nomor_telp }}" target="blank"><button class="btn btn-info"><i class="fab fa-whatsapp fa-2x"></i></button></a>
                            <a href="{{ $umkm->url_map }}" target="_blank"><button class="btn btn-info"><i class="fas fa-map-marked fa-2x"></i></button></a>
                            <!-- Harus diberi keterangan status user apakah merupakan admin atau user biasa-->
                            <form action="/umkm/deleteUmkm/{{$umkm->id_umkm}}" method="POST">
                                {{csrf_field()}}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4  animate-fadeInLeft">
                    <div id="right-content">
                        <img src="{{ asset('imgUmkm/'.$umkm->photos1_umkm)}}" alt="">
                    </div>
                </div>
            <?php $j = 0;
            } else { ?>
                <div class="col-md-6 mb-4 animate-fadeInRight">
                    <div id="right-content">
                        <img src="{{ asset('imgUmkm/'.$umkm->photos1_umkm)}}" alt="">
                    </div>
                </div>
                <div class="col-md-6  animate-box">
                    <div id="left-content">
                        <div class="text-content">
                            <p>&nbsp;{{ $umkm->description_umkm}}</p>
                        </div>
                        <div>
                            <a href="https://api.whatsapp.com/send?phone={{ $umkm->nomor_telp }}" target="blank"><button class="btn btn-info"><i class="fab fa-whatsapp fa-2x"></i></button></a>
                            <a href="{{ $umkm->url_map }}" target="_blank"><button class="btn btn-info"><i class="fas fa-map-marked fa-2x"></i></button></a>
                            <form action="/umkm/deleteUmkm/{{$umkm->id_umkm}}" method="POST">
                                {{csrf_field()}}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php $j = 1;
            } ?>
        </div>
        @endforeach
    </div>
</div>
@endsection