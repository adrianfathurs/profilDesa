<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="margin-top: 45px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="exampleModalLabel">Input Informasi</h3>
            </div>
            <div class="modal-body">
                <form action="{{ route('tourism.store')}}" method="post" enctype="multipart/form-data">
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
                        <p>Tersisa : <span id="jmlKarakter">600</span> Karakter</p>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Contact Person:</label>
                        <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Link Share Gmaps:</label>
                        <input type="text" class="form-control" id="map_url" name="map_url">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Link API Map:</label>
                        <input type="text" class="form-control" id="map_api" name="map_api">
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