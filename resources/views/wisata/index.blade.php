@extends('template.templatePage')
@section('content')
<!-- jumbotron area -->
<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
        style="background-image: url({{asset('images/banner/wisata.jpg')}});">
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
    @include('wisata.addModal')
</div>
<!--/ jumbotron end -->

<div class="fh5co-listing">
    <div class="container">
        <div class="cls"></div>
        <div class="row">
            @foreach($dataTourism as $item)
            <div class="col-md-4 col-sm-4 fh5co-item-wrap">
                <a class="fh5co-listing-item" href="{{ route('tourism.show', ['tourism' => $item->id_tourism]) }}">
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
@endsection