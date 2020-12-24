@extends('template.templatePage')
@section('content')
<!-- jumbotron area -->
<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/banner/wisata.jpg')}});">
        <div class="desc animate-box">
            <h2>Daftar Wisata Sambirejo</h2>
            <!-- button Modals, Untuk form modals tambah ada dibawah -->
            @if (Auth::check())
            <span>
                <button type="button" class="btn btn-success float-right mb-1" data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah
                </button>
            </span>
            @endif
        </div>
    </div>
    <!-- Modal form tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="margin-top: 45px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="exampleModalLabel">Input Informasi</h3>
                </div>
                <div class="modal-body">
                    <form action="{{ route('saveTourism')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Wisata:</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Gambar Cover:</label>
                            <input type="file" class="form-control" id="photos" name="photos1">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Deskripsi:</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
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
</div>
<!--/ jumbotron end -->

<div class="fh5co-listing" style="background-color: black">
    <div class="container">
        <div class="cls"></div>
        <div class="row">
            @foreach($dataTourism as $item)
            <div class="col-md-4 col-sm-4 fh5co-item-wrap">
                <a class="fh5co-listing-item">
                    <img src="{{asset('imgTourism/'.$item->photos1_tourism)}}"
                        alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
                    <div class="fh5co-listing-copy">
                        <h2>{{ $item->judul }}</h2>
                        <span class="icon">
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </span>
                    </div>
                </a>
            </div>
            @endforeach
            <!-- END 3 row -->
        </div>
    </div>
</div>
</div>
@endsection