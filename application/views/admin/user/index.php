    <!-- Begin Page Content -->
    <div class="container-fluid">
    <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal">Tambah Pengguna Baru</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Pengguna</h6>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Hak Akses</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>        
        <!-- <tfoot>
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Hak Akses</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </tfoot> -->
        <tbody>
        <?php foreach ($alluser as $a) : ?>
            <tr>
            <td><?= $a['id']; ?></td>
            <td><?= $a['name']; ?></td>
            <td><?= $a['email']; ?></td>
            <td ><?= $a['role']; ?></td>
            <td><?php  
                if($a['is_active'] == 1){
                    echo "Aktif";
                }else{
                    echo "Non Aktif";
                }
            ?></td>
            <td>
            <a data-toggle="modal" data-target="#editUserModal<?= $a['id']; ?>" class="badge badge-success text-white"><i class="far fa-edit"></i> Ubah</a>
            <?php if( $a['is_active'] == 1 ): ?>
            <a onclick="return confirm('yakin menonaktifkan pengguna?')" href="<?= base_url(); ?>user/nonaktifUser/<?= $a['id']; ?>" class="badge badge-danger text-white"><i class="fas fa-power-off"></i> Nonaktifkan</a>
            <?php else : ?>
            <a href="<?= base_url(); ?>user/aktifUser/<?= $a['id']; ?>" class="badge badge-primary text-white"><i class="fas fa-power-off"></i> Aktifkan</a>
            <?php endif; ?>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Modal Add Pengguna-->
    <div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newUserModalLabel">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('user'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Pengguna" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="role_id" id="role_id" class="form-control">
                                <option value="">Hak Akses</option>
                                <?php foreach ($role as $r) : ?>
                                <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                <label class="form-check-label" for="is_active">
                                    Aktif?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Pengguna-->
    <?php foreach ($alluser as $a) : ?>
    <div class="modal fade" id="editUserModal<?= $a['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Ubah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('user/edituser'); ?>" method="post">
                    <div class="modal-body">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $a['id']; ?>">
                    <input type="hidden" class="form-control" id="image" name="image" value="<?= $a['image']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Pengguna" value="<?= $a['name']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= $a['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="role_id" id="role_id" class="form-control">
                                <option value="">Hak Akses</option>
                                <?php foreach ($role as $r) : ?>
                                <?php if( $a['role_id'] == $r['id'] ) : ?>
                                <option value="<?= $r['id']; ?>" selected><?= $r['role']; ?></option>
                                <?php else : ?>
                                <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" 
                                <?php 
                                if($a['is_active'] == 1){
                                    echo "checked";
                                }
                                ?>>
                                <label class="form-check-label" for="is_active">
                                    Aktif?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>