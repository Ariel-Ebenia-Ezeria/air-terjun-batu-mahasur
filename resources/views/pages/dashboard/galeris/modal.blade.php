<!--Modal Tambah-->
<div class="text-left modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah Galeri </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>Kategori: </label>
                    <div class="form-group">
                        <select class="form-select" name="kategori" id="kategori">
                            <option value="">Pilih Kategori</option>
                            <option value="Tentang">Tentang</option>
                            <option value="Home">Home</option>
                            <option value="Galeri">Galeri</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="file" placeholder="Email Address" name="nama_file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="ml-1 btn btn-primary">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>