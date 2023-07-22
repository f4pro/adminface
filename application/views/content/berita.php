<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $title; ?></h2>


    <div class="row">
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>', '</div>') ?>

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

            <a href="<?= base_url('content/newberita'); ?>" class="btn btn-primary mb-3">Tambah Berita Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Posted</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($berita as $b) : ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $b['judul']; ?></td>
                            <?php foreach ($kategori as $k) :
                                if ($k['id'] == $b['kategori']) { ?>
                                    <td><?= $k['kategori']; ?></td>
                            <?php }
                            endforeach; ?>
                            <td><?= $b['date_posted']; ?></td>
                            <td><?= $b['author']; ?></td>
                            <td>
                                <a href="<?= base_url('content/editberita/') . $b['id_berita']; ?>" class="badge badge-success">
                                    <i class="fas fa-edit mr-1"></i>Edit</a>

                                <a href="<?= base_url('content/hapusberita/') . $b['id_berita']; ?>" class="badge badge-danger tombol-hapus">
                                    <i class="fas fa-trash mr-1"></i>Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->