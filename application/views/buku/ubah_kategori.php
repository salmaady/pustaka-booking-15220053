<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h1 class="h4 text-gray-900">Ubah Kategori Buku</h1>
                    </div>
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-danger alert-message" role="alert">
                            Nama Kategori tidak boleh Kosong
                        </div>
                    <?php } ?>
                    <?php foreach ($kategori as $k) { ?>
                        <form action="<?= base_url('buku/ubahKategori'); ?>" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id_kategori" id="id_kategori" value="<?= $k['id_kategori']; ?>">
                                <input type="text" class="form-control form-control-user" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Kategori Buku" value="<?= $k['nama_kategori']; ?>">
                            </div>
                            <div class="form-group text-center">
                                <input type="button" class="btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                                <input type="submit" class="btn btn-primary col-lg-3 mt-3" value="Update">
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->