<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center mb-4">
                                    <h1 class="h4 text-gray-900">Ubah Data Buku</h1>
                                </div>
                                <?php if (validation_errors()) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php } ?>
                                <?= $this->session->flashdata('pesan'); ?>
                                <!-- Content -->
                                <?php foreach ($buku as $b) { ?>
                                    <form action="<?= base_url('buku/ubahBuku'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" class="img-thumbnail" alt="">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" id="id" value="<?= $b['id']; ?>">
                                                    <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $b['judul_buku']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select name="id_kategori" class="form-control form-control-user">
                                                        <option value="<?= $b['id_kategori']; ?>">Pilih Kategori...</option>
                                                        <?php foreach ($kategori as $k) { ?>
                                                            <option value="<?= $k['id_kategori']; ?>" <?= $k['id_kategori'] == $b['id_kategori'] ? 'selected' : ''; ?>><?= $k['nama_kategori']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan Nama Pengarang" value="<?= $b['pengarang']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan Nama Penerbit" value="<?= $b['penerbit']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select name="tahun" class="form-control form-control-user">
                                                        <option value="<?= $b['tahun_terbit']; ?>">Pilih Tahun Terbit...</option>
                                                        <?php for ($i = date('Y'); $i > 1000; $i--) { ?>
                                                            <option value="<?= $i; ?>" <?= $i == $b['tahun_terbit'] ? 'selected' : ''; ?>><?= $i; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?= $b['isbn']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan Nominal Stok" value="<?= $b['stok']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <?php if (isset($b['image'])) { ?>
                                                        <input type="hidden" name="old_pict" id="old_pict" value="<?= $b['image']; ?>">
                                                        <picture>
                                                            <source srcset="" type="image/svg+xml">
                                                            <img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" class="rounded mx-auto mb-3 d-block" alt="..." width="70">
                                                        </picture>
                                                    <?php } ?>
                                                    <input type="file" class="form-control form-control-user" id="image" name="image">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Kembali</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->