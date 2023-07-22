<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $title; ?></h2>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('content/uploadberita'); ?>" method="post">
                <input type="hidden" name="id_berita" value="<?= $berita['id_berita']; ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>" <?php if($k['id'] == $berita['kategori']){
                                    echo "selected";
                                } ?>>
                                    <?= $k['kategori']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita" value="<?= $berita['judul']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi_berita" name="isi_berita" placeholder="Isi Berita" value="<?= $berita['isi_berita']; ?>">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- End Modal Menu -->