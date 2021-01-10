@extends('template.templatePage')
@section('content')

<!-- load css umkm -->
<!-- load css for homePage -->
<link rel="stylesheet" href="{{ asset('/css/umkm.css') }}">

<!-- jumbotron area -->
<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
        style="background-image: url({{asset('images/banner/umkm.jpg')}});">
        <div class="desc animate-box">
            <h2>Daftar UMKM Sambirejo</h2>
            <!-- button Modals, Untuk form modals tambah ada dibawah -->
            @if (Auth::check())
            <span>
                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                </button>
            </span>
            @endif
        </div>
    </div>
    <!--  Add modal form -->
    @include('umkm.addModal')
</div>
<!--/ jumbotron end -->

<div class="section-wrap" style="background-color: black">
    <div class="container">
        <div style="both:clear;"></div>
        <?php $j = 0; ?> @foreach($dataUmkm as $umkm)
        <p class="text-header text-center mt-3 mb-3">UMKM {{$umkm->judul}}</p>
        <hr size="100px" width="30%">
        <div class="row mbottom">
            <?php if ($j == 1) { ?>
            <div class="col-md-6 mb-4  animate-box">
                <div id="left-content">
                    <div class="text-content">
                        <p>&nbsp;<?php  echo UCWORDS(substr($umkm->description_umkm, 0, 300)) . '...'; ?></p>
                    </div>
                   <div class="row">
                       <!--  <a href="https://api.whatsapp.com/send?phone={{ $umkm->nomor_telp }}" target="blank"><button
                                class="btn btn-info"><i class="fab fa-whatsapp fa-2x"></i></button></a>
                        <a href="{{ $umkm->url_map }}" target="_blank"><button class="btn btn-info"><i
                                    class="fas fa-map-marked fa-2x"></i></button></a> -->
                        <div class="col-md-3">
                            <a href="{{ route('umkm.show',['umkm'=>$umkm->id_umkm])}}"><button class="btn btn-outline-warning"> Read More </button></a>
                        </div>
                        <div class="col-md-3">
                            @if (Auth::check())
                            <form class=" delete-umkm-form "action="route('umkm.destroy', ['umkm' => $umkm->id_umkm])" method="POST">
                                {{csrf_field()}}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-umkm-form">Delete</button>
                            </form>
                            @endif
                        </div>
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
                        <p>&nbsp;<?php  echo(substr($umkm->description_umkm, 0, 300)) . '...'; ?></p>
                    </div>
                    <div class="row">
                       <!--  <a href="https://api.whatsapp.com/send?phone={{ $umkm->nomor_telp }}" target="blank"><button
                                class="btn btn-info"><i class="fab fa-whatsapp fa-2x"></i></button></a>
                        <a href="{{ $umkm->url_map }}" target="_blank"><button class="btn btn-info"><i
                                    class="fas fa-map-marked fa-2x"></i></button></a> -->
                        <div class="col-md-3">
                            <a href="{{ route('umkm.show',['umkm'=>$umkm->id_umkm]) }}"><button class="btn btn-outline-warning"> Read More </button></a>
                        </div>
                        <div class="col-md-3">
                            @if (Auth::check())
                            <form class="delete-umkm-form" action="{{ route('umkm.destroy', ['umkm' => $umkm->id_umkm]) }}" method="POST">
                                {{csrf_field()}}
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger delete-umkm-form">Delete</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <?php $j = 1;
            } ?>
        </div>
        @endforeach
        <div >
            <center>{{ $dataUmkm->links() }}</center>
        </div>
    </div>
</div>
@endsection

@push('deleteConfirm-scripts')
<script>
    $('.delete-umkm-form').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        Swal.fire({
        title: 'Anda yakin menghapus konten UMKM ?',
        text: "Anda tidak dapat mengembalikan data otomatis dan Konten Beserta gambar akan ikut terhapus !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
        }).then((result) => {
        if (result.isConfirmed) {
        $('.delete-umkm-form').submit();
        }
        })
        });
</script>
@endpush