 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="margin-top: 45px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="exampleModalLabel">Input Informasi UMKM</h3>
                </div>
                <div class="modal-body">
                    <form action="{{ route('umkm.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Umkm :</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Gambar Umkm:</label>
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