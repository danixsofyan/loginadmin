            <!-- Container -->
            <div class="container  mt-xl-30 mt-sm-30 mt-15">
                <!-- Title -->
                <br>
                <div class="hk-pg-header justify-content-center">
                    <h4 class="hk-pg-title">
                        <span class="pg-title-icon"><span class="feather-icon">
                            <i data-feather="external-link"></i></span></span><?= $title; ?></h4>
                        
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-8 offset-md-2">
                        <section class="hk-sec-wrapper">
                        <?= $this->session->flashdata('message'); ?>
                            <h6 class="text-center">Keamanan data yang telah diisi akan dirahasiakan <a class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm offset-xl-3" href="<?= base_url('form'); ?>"><span class="icon-label"><i class="fa fa-arrow-left"></i></span><span class="btn-text">Kembali</span></a></h6>                            
                            <hr>
                            <div class="row">
                                <div class="col-sm">
                                    <form class="needs-validation" method="post" action="<?= base_url('form/updateuser'); ?>" novalidate>
                                        <input class="form-control" id="id" type="hidden" name="id" value="<?= $user['id']; ?>">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                                <label for="firstname">Nama Depan</label>
                                                <input class="form-control" id="firstname"
                                                    placeholder="Nama depan anda." type="text" name="firstname"
                                                    value="<?= $user['firstname']; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="lastname">Nama Belakang</label>
                                                <input class="form-control" id="lastname"
                                                    placeholder="Nama belakang anda." type="text" name="lastname"
                                                    value="<?= $user['lastname']; ?>" required>                                                
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" value="<?= $user['email']; ?>" readonly>
                                                    <div class="valid-feedback">
                                                    Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Required
                                                    </div>
                                            </div>
                                            <div class="col-md-3 mb-10">
                                                <label for="tmptlahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tmptlahir" name="tmptlahir"
                                                    placeholder="Tempat lahir" value="<?= $user['tmptlahir']; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-10">
                                                <label for="tgllahir">Tanggal Lahir</label>
                                                <input class="form-control" type="text" name="birthday"
                                                    value="<?php 
                                                        if($user['tgllahir'] == NULL){
                                                            echo '01/01/1990';
                                                        } else{
                                                            echo date_format(date_create($user['tgllahir']),"m-d-Y");
                                                        }
                                                                ?>" name="tgllahir" />
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">No Identitas</label>
                                            <input class="form-control" id="noidentitas"
                                                    type="number" name="noidentitas" value="<?= $user['noidentitas']; ?>" required>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3"
                                                name="alamat" required><?= $user['alamat']; ?></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-10">
                                                <label for="country">Provinsi</label>
                                                <input class="form-control" id="provinsi"
                                                placeholder="Provinsi" type="text"
                                                name="provinsi" value="<?= $user['provinsi']; ?>" required>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="state">Kota</label>
                                                <input class="form-control" id="kota"
                                                placeholder="Kota" type="text"
                                                name="kota" value="<?= $user['kota']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input class="form-control" id="pekerjaan"
                                                placeholder="Informasi pekerjaan anda." type="text"
                                                name="pekerjaan" value="<?= $user['pekerjaan']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan">Jenjang Pendidikan</label>
                                            <input class="form-control" id="pendidikan"
                                                placeholder="Masukkan jenjang pendidikan anda (SD/SMP/SMA/S1/S2/S3)."
                                                type="text" name="pendidikan" value="<?= $user['pendidikan']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan Pekerjaan</label>
                                            <input class="form-control" id="jabatan"
                                                placeholder="Masukkan jabatan pekerjaan anda." type="text"
                                                name="jabatan" value="<?= $user['jabatan']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="perusahaan">Perusahaan</label>
                                            <input class="form-control" id="perusahaan"
                                                placeholder="Perusahaan anda bekerja sekarang." type="text"
                                                name="perusahaan" value="<?= $user['perusahaan']; ?>" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-10">
                                                <label for="nohp">Nomor Handphone</label>
                                                <input class="form-control" id="nohp"
                                                    placeholder="Nomor handphone anda yang aktif saat ini."
                                                    type="number" name="nohp" value="<?= $user['nohp']; ?>" required>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="notlp">No. Telepon Rumah</label>
                                                <input class="form-control" id="notlp" value="<?= $user['notlp']; ?>" placeholder="Nomor telepon rumah anda" type="number" name="notlp">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-10">
                                                <label for="fb">Facebook</label>
                                                <input class="form-control" id="fb"
                                                    placeholder="Akun Facebook anda." value="<?= $user['fb']; ?>" type="text" name="fb">
                                                <p>Format: http://facebook.com/your-facebook-id</p>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="twitter">Twitter</label>
                                                <input class="form-control" id="twitter"
                                                    placeholder="Akun Twitter anda." value="<?= $user['twitter']; ?>" type="text" name="twitter">
                                                <p>Format: http://twitter.com/yourtwitter</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <button class="btn btn-danger pull-right" type="submit">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->