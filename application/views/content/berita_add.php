<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $title; ?></h2>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>', '</div>') ?>

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <form action="<?= base_url('content/uploadberita'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>">
                                    <?= $k['kategori']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi_berita" name="isi_berita" placeholder="Isi Berita">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- End Modal Menu -->