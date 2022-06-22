<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>



<div class="card mb-3">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Detail Registrasi Siswa
        </div>
        
    </div>
    <div class="card-body">
        <table style="width: 100%;" id="example"
                class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIPD</th>
                <th>Kelas</th>
                <th>Nama Ibu</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach ($user as $user) : ?>
                <tr>
                <td class="align-middle"><?= $i++ ?></td>
                    <td class="align-middle"><?= $user['nama']; ?></td>
                    <td class="align-middle"><?= $user['nipd']; ?></td>
                    <td class="align-middle"><?= $user['kelas']; ?></td>
                    <td class="align-middle"><?= $user['nama_ibu']; ?></td>
                    <td class="align-middle">
                    <button type="button" class="btn btn-sm btn-info user" id="edit_user" data-nama="<?= $user['nama']; ?>" data-nipd="<?= $user['nipd']; ?>" data-ibu="<?= $user['nama_ibu']; ?>" data-kelas="<?= $user['kelas']; ?>" data-id="<?= $user['id']; ?>" data-toggle="modal" data-target="#editUser" >
                            Edit
                    </button>
                        <a class="btn btn-danger btn-sm tombol-hapus" role="button" href="<?= base_url(); ?>admin/hapusUserSiswa/<?= $user['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div> 