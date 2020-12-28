<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="margin-top: 45px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="exampleModalLabel">Input Informasi</h3>
            </div>
            <div class="modal-body">
                <form action="/umkm_pic/{{ $umkm->id_umkm }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="title" class="col-form-label">Judul Gambar:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Gambar :</label>
                        <input type="file" class="form-control" id="pics" name="pics">
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