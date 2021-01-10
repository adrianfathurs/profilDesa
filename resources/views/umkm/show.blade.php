
<!--  ######################## -->
@extends('template.templatePage')
@section('content')

@if($UmkmPics->isEmpty())
<div class="fh5co-hero" style="height: 360px">
    <div class="fh5co-overlay" style="height: 360px"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
        style="background-image: url({{asset('images/cover_bg_1.jpg')}}); height: 360px">
        <div class="desc animate-box">
            <h3>Belum Ada Gambar UMKM</h3>
            @if (Auth::check())
            <h4>Tambah Gambar UMKM {{$umkm->judul}}</h4>
            <span>
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    Tambah
                </button>
            </span>
            @endif
        </div>
    </div>
    <!-- form modal -->
     @include('umkm.picModal')
</div>
@else
<!-- banner area -->
<div class="fh5co-hero" style="height: 360px">
    <div class="fh5co-overlay" style="height: 360px"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
        style="background-image: url({{asset('imgUmkm/'.$umkm->photos1_umkm)}}); height: 360px">
    </div>
    <!-- form modal -->
     @include('umkm.picModal')
</div>
<!--/ banner end -->
@endif
<br>
{{-- Main Card --}}
<div class="fh5co-listing" style="margin-top:20px;">
    {{-- LIST Wisata --}}
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="fh5co-blog animate-box">
                    <div class="blog-text">
                    @if($UmkmPics->isEmpty())
                       <!-- Tidak Tampil -->
                       @else
                        @if(Auth::check())
                        <button type="button" title="Tambah Gambar" class="btn btn-warning btn-lg" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Tambah
                        </button>
                        @endif
                        
                        <!-- form modal -->
                        @include('umkm.picModal')
                    @endif
                        <span class="posted_on">{{$umkm->created_at}}</span>
                        <h3><a href="#">{{$umkm->judul}}</a></h3>
                        <p>{{$umkm->description_umkm}}</p>
                        <br>
                        <ul class="stuff">
                            <li>
                                <a href="https://api.whatsapp.com/send?phone={{ $umkm->nomor_telp }}" target="blank">
                                    <button
                                        class="btn btn-info"><i class="fab fa-whatsapp fa-3x"></i>
                                    </button>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ $umkm->url_map }}" target="_blank">
                                    <button class="btn btn-info">
                                        <i class="fas fa-map-marked fa-3x"></i>
                                    </button>
                                </a> 
                            </li>
                            @if (Auth::check())
                            <li>
                                <form class="delete-umkm-form"
                                    action="{{ route('umkm.destroy', ['umkm' => $umkm->id_umkm]) }}"
                                    method="POST">
                                    {{csrf_field()}}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return false"
                                        class="delete-umkm-form">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="galery" class="fh5co-listing">
    {{-- LIST Wisata --}}
    <div class="container">
        <div class="cls"></div>
        <div class="row">
            @forelse($UmkmPics as $item)
            <div class="col-md-4 col-sm-4 fh5co-item-wrap">
                <a class="fh5co-listing-item openImageDialog" data-toggle="modal" data-target="#imageModal" data-src="{{asset('imgUmkm/umkm_pic/'.$item->pics)}}">
                    <img src="{{asset('imgUmkm/umkm_pic/'.$item->pics)}}" alt="{{ $item->title }}"
                        class="img-responsive">
                        
                    <div class="fh5co-listing-copy">
                        <h2>{{ $item->title }}</h2>
                        <span class="icon">
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </span>
                        
                    </div>
                </a>
             @if (Auth::check())
                                <a href="" class="delete-umkm-pic" data-id="{{$item->id_umkm_pic}}" data-inisial="{{$item->title}}" >
                                    <form action="/umkm/umkm_pic/deletePic/{{$item->id_umkm_pic}}" id="delete{{$item->id_umkm_pic}}" METHOD="POST">
                                    {{csrf_field()}}
                                    @method('delete')    
                                    </form>
                                    <i class="fas fa-trash">{{$item->id_umkm_pic}}</i>
                                </a>
            @endif    
            </div>
            
            <!-- image modal -->
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
                style="margin-top: 45px">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title text-center" id="exampleModalLabel">{{ $item->title }}
                            </h3>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <img id="modalImage" src="{{asset('imgUmkm/umkm_pic/'.$item->pics)}}" alt="{{ $item->title }}"
                                    class="img-responsive">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <h4 class="text-center white">No Images Yet</h4>
            @endforelse
            <!-- END 3 row -->
        </div>
    </div>

</div>
@endsection

@push('deleteConfirm-scripts')
<script>
    $('.delete-umkm-pic').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        let inisial = $(this).data('inisial');
        console.log(id);
        Swal.fire({
        title: 'Anda yakin menghapus Foto UMKM '+inisial+'?',
        text: "Anda tidak dapat mengembalikan data otomatis !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
        }).then((result) => {
        if (result.isConfirmed) {
        $(`#delete${id}`).submit();
        }
        })
        });
</script>

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

@push('image-modal')
<script>
    $(document).on("click", ".openImageDialog", function () {
    var myImageId = $(this).data('src');
    var myTitle = $(this).data('title');
    $(".modal-body #modalImage").attr("src", myImageId);
    document.getElementById("exampleModalLabel").innerHTML = myTitle;
    // $(".modal-header #exampleModalLabel").innderHTML= myTitle;
    });

</script>
@endpush



