<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('user/ubahUser'); ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $user['nama']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $user['email']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="role_id" name="role_id" value="<?= $user['role_id']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="is_active" name="is_active" value="<?= $user['is_active']; ?>">
                </div>
                <div class="form-group">
                    <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                    <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->