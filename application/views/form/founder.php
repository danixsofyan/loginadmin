            <!-- Container -->
            <div class="container">
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
                                    <form class="needs-validation" method="post" action="<?= base_url('form/'); ?>" novalidate>
                                        <input class="form-control" id="id" type="hidden" name="id" value="<?= $user['id']; ?>">
                                        <div class="form-group">
                                            <label for="datafounder">Data Founder - minimal 2 orang</label>
                                            <section class="hk-sec-wrapper">
                                                <!-- Button trigger modal -->
                                                
                                                <div class="row">
                                                <div class="col-md-3">                                                
                                                <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#addfounder"><i class="ion ion-md-add-circle-outline"></i> Add Founder</button>
                                                </div>
                                                <?php 
                                                    if($founder['startup_id'] == NULL){
                                                        echo 'Founder belum ada';
                                                    } else{
                                                        foreach ($founderall as $f) :
                                                            if($f['image'] == NULL){
                                                                echo '
                                                                <div class="col-md-2">
                                                                <img src="'.base_url('assets/socioide/default.jpg').'" class="img-thumbnail" style="width: 70px; height: 70px;">
                                                                <p>'.$f['name'].'</p>
                                                                <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#exampleModalLongs'.$f['id'].'"><i class="ion ion-md-add-circle-outline"></i> Edit</button>
                                                                </div>';                                                                
                                                            } else{
                                                                echo '
                                                            <div class="col-md-2">
                                                                <img src="'.base_url('assets/socioide/founder/') . $f['image'].'" class="img-thumbnail" data-holder-rendered="true" style="width: 70px; height: 70px;">
                                                                <p>'.$f['name'].'</p>
                                                                <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#exampleModalLongs'.$f['id'].'"><i class="ion ion-md-add-circle-outline"></i> Edit</button>
                                                            </div>';
                                                            }                                                            
                                                        endforeach;
                                                    }
                                                ?>
                                            </section>                                     
                                        </div>
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

            <!-- Modal Add-->
            <div class="modal fade" id="addfounder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">ADD STARTUP FOUNDER & CO FOUNDER</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form class="needs-validation" method="post" action="<?= base_url('form/savefounder'); ?>" enctype="multipart/form-data" novalidate>   
                        <input class="form-control" id="id" type="hidden" name="id" value="<?= $user['id']; ?>">
                        <input class="form-control" id="idstartup" type="hidden" name="idstartup" value="<?= $startup['id_socioide']; ?>">
                        <div class="form-row">
                            <div class="col-md-12">
                                <p class="mb-40 text-center">Upload profile picture with JPG or PNG max. size 2Mb (Min. width 150 x 150px)</p>
                                <div class="col-md-4 offset-md-4">
                                <input type="file" id="input-file-now" class="dropify" id="avafounder" name="avafounder"/>
                                <p clas="text-center">* wajib di isi</p>
                                </div>
                            </div>
                            <div class="col-md-12 mb-10">
                                <br>
                                <label for="name">Nama Lengkap</label>
                                <input class="form-control" id="name"
                                    placeholder="Masukkan nama lengkap" type="text" name="name"
                                    value="" required>
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
                                <label for="birth_place">Tempat Lahir</label>
                                <input type="text" class="form-control" id="birth_place" name="birth_place"
                                    placeholder="Tempat lahir" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Required
                                </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="birthday">Tanggal Lahir</label>
                                <input class="form-control" type="text" name="birthday"
                                    value="01/01/1990"/>
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
                                    placeholder="Email" value="" required>
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Required
                                    </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="phone">No tlp</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    placeholder="No Telepon" value="" required>
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
                                <label for="position">Jabatan</label>
                                <input type="text" class="form-control" id="position" name="position"
                                    placeholder="Jabatan" value="" required>
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Required
                                    </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="role">Peran Dalam Team</label>
                                <select class="form-control custom-select d-block w-100" id="role" name="role">
                                    <option value="">Pilih Peran Dalam Team</option>
                                    <option value="bisnis">Bisnis</option>
                                    <option value="teknik">Teknik</option>
                                    <option value="design">Design</option>
                                    <option value="lainya">Lainya</option>
                                </select>
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
                                
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="role_info">Penjelasan Singkat</label>
                                <textarea class="form-control" id="role_info" rows="5"
                                    name="role_info" required></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                <label for="education">Riwayat Pendidikan Tinggi</label>
                                <textarea class="form-control" id="education" rows="5"
                                    name="education" required></textarea>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="experience">Riwayat Pekerjaan, Usaha, dan Proyek</label>
                                <textarea class="form-control" id="experience" rows="5"
                                    name="experience" required></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                <label for="job">Pekerjaan Saat ini</label>
                                <textarea class="form-control" id="job" rows="5"
                                    name="job" required></textarea>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="skill">Daftar Keahlian Utama</label>
                                <textarea class="form-control" id="skill" rows="5"
                                    name="skill" required></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="skill_info">Berapa lama menguasai keahlian tersebut.</label>
                                <textarea class="form-control" id="skill_info" rows="5"
                                    name="skill_info" required></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                <label for="work_time">Apabila diterima, apakah akan full time di Indigo Incubator</label>
                                <p>Pilih salah satu.</p>
                                <input type="radio" id="addFullTime" name="work_time" value="full-time"> Full Time
                                <input type="radio" id="addFullTime" name="work_time" value="part-time"> Part Time
                                <hr>
                                <p>Jika memilih part time, apa aktivitas lain di luar pengembangan produk ini ?</p>
                                <textarea class="form-control" id="work_time_info" rows="5"
                                    name="work_time_info"></textarea>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="achievement">Pencapaian / Prestasi / Hal Keren yang Pernah Dibuat</label>
                                <textarea class="form-control" id="achievement" rows="5"
                                    name="achievement" required></textarea>
                            </div>                            
                        </div>                        
                        <div class="row">
                            <div class="col-md-6 mb-10">
                                <label for="twitter">Twitter</label>
                                <input class="form-control" id="twitter"
                                    placeholder="Akun Twitter anda." value="" type="text" name="twitter">
                                <p>Format: http://twitter.com/yourtwitter</p>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="facebook">Facebook</label>
                                <input class="form-control" id="fb"
                                    placeholder="Akun Facebook anda." value="" type="text" name="facebook">
                                <p>Format: http://facebook.com/your-facebook-id</p>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-10">
                                <label for="linkedin">Linkedin</label>
                                <input class="form-control" id="twitter"
                                    placeholder="Akun Linkedin anda." value="" type="text" name="linkedin" required>
                                <p>Format: linkedin.com/in/youraccount</p>
                            </div>                           
                        </div>                                                      
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            <button class="btn btn-danger pull-right" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            
            <?php foreach ($founderall as $f) : ?>
            <!-- Modal Edit-->
            <div class="modal fade" id="exampleModalLongs<?= $f['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">EDIT STARTUP FOUNDER & CO FOUNDER</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form class="needs-validation" method="post" action="<?= base_url('form/editfounder'); ?>" enctype="multipart/form-data" novalidate>
                        <input class="form-control" id="id" type="hidden" name="idfounder" value="<?= $f['id']; ?>">
                        <input class="form-control" id="idstartup" type="hidden" name="idstartup" value="<?= $startup['id_socioide']; ?>">
                        <div class="form-row">
                            <div class="col-md-12">
                                <p class="mb-40 text-center">Upload profile picture with JPG or PNG max. size 2Mb (Min. width 150 x 150px)</p>
                                <div class="col-md-4 offset-md-4">
                                <input type="file" id="input-file-now" class="dropify" id="avafounder" name="avafounder" value="<?= $f['image']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-12 mb-10">
                                <br>
                                <label for="name">Nama Lengkap</label>
                                <input class="form-control" id="name"
                                    placeholder="Masukkan nama lengkap founder" type="text" name="name"
                                    value="<?= $f['name']; ?>" required>
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
                                <label for="birth_place">Tempat Lahir</label>
                                <input type="text" class="form-control" id="birth_place" name="birth_place"
                                    placeholder="Tempat lahir" value="<?= $f['birth_place']; ?>" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Required
                                </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="birth_date">Tanggal Lahir</label>
                                <input class="form-control" type="text" name="birthday"
                                    value="<?= date_format(date_create($f['birth_date']),"m-d-Y"); ?>"/>
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
                                    placeholder="City" value="<?= $f['email']; ?>">
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Required
                                    </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="phone">No tlp</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="No Telepon" value="<?= $f['phone']; ?>" required>
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
                                <label for="position">Jabatan</label>
                                <input type="text" class="form-control" id="position" name="position"
                                    placeholder="Jabatan" value="<?= $f['position']; ?>">
                                    <div class="valid-feedback">
                                    Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Required
                                    </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="role">Peran Dalam Team</label>
                                <select class="form-control custom-select d-block w-100" id="role" name="role">
                                    <option value="">Pilih Peran Dalam Team</option>
                                    <?php if( $f['role'] == "bisnis" ) : ?>
                                    <option value="bisnin" selected>Bisnis</option>
                                    <option value="teknik">Teknik</option>
                                    <option value="design">Design</option>
                                    <option value="lainya">Lainya</option>
                                    <?php elseif( $f['role'] == "teknik" ) : ?>
                                    <option value="bisnin">Bisnis</option>
                                    <option value="teknik" selected>Teknik</option>
                                    <option value="design">Design</option>
                                    <option value="lainya">Lainya</option>
                                    <?php elseif( $f['role'] == "design" ) : ?>
                                    <option value="bisnin">Bisnis</option>
                                    <option value="teknik">Teknik</option>
                                    <option value="design" selected>Design</option>
                                    <option value="lainya">Lainya</option>
                                    <?php else : ?>
                                    <option value="bisnin">Bisnis</option>
                                    <option value="teknik">Teknik</option>
                                    <option value="design">Design</option>
                                    <option value="lainya" selected>Lainya</option>
                                    <?php endif; ?>
                                </select>
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
                                
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="role_info">Penjelasan Singkat</label>
                                <textarea class="form-control" id="role_info" rows="5"
                                    name="role_info" required><?= $f['role_info']; ?></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                <label for="education">Riwayat Pendidikan Tinggi</label>
                                <textarea class="form-control" id="education" rows="5"
                                    name="education" required><?= $f['education']; ?></textarea>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="experience">Riwayat Pekerjaan, Usaha, dan Proyek</label>
                                <textarea class="form-control" id="experience" rows="5"
                                    name="experience" required><?= $f['experience']; ?></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                <label for="education">Pekerjaan Saat ini</label>
                                <textarea class="form-control" id="job" rows="5"
                                    name="job" required><?= $f['job']; ?></textarea>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="skill">Daftar Keahlian Utama</label>
                                <textarea class="form-control" id="skill" rows="5"
                                    name="skill" required><?= $f['skill']; ?></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="skill_info">Berapa lama menguasai keahlian tersebut.</label>
                                <textarea class="form-control" id="skill_info" rows="5"
                                    name="skill_info" required><?= $f['skill_info']; ?></textarea>
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-10">
                                <label for="education">Apabila diterima, apakah akan full time di Indigo Incubator</label>
                                <p>Pilih salah satu.</p>
                                <?php if( $f['work_time'] == "full-time" ) : ?>
                                <input type="radio" id="addFullTime" name="work_time" value="full-time" checked=""> Full Time
                                <input type="radio" id="addFullTime" name="work_time" value="part-time"> Part Time
                                <?php else : ?>
                                <input type="radio" id="addFullTime" name="work_time" value="full-time"> Full Time
                                <input type="radio" id="addFullTime" name="work_time" value="part-time" checked> Part Time
                                <?php endif; ?>
                                <hr>
                                <p>Jika memilih part time, apa aktivitas lain di luar pengembangan produk ini ?</p>
                                <textarea class="form-control" id="work_time_info" rows="5"
                                    name="work_time_info"><?= $f['work_time_info']; ?></textarea>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="achievement">Pencapaian / Prestasi / Hal Keren yang Pernah Dibuat</label>
                                <textarea class="form-control" id="achievement" rows="5"
                                    name="achievement" required><?= $f['achievement']; ?></textarea>
                            </div>                            
                        </div>                        
                        <div class="row">
                            <div class="col-md-6 mb-10">
                                <label for="twitter">Twitter</label>
                                <input class="form-control" id="twitter"
                                    placeholder="Akun Twitter anda." value="<?= $f['twitter']; ?>" type="text" name="twitter">
                                <p>Format: http://twitter.com/yourtwitter</p>
                            </div>
                            <div class="col-md-6 mb-10">
                                <label for="facebook">Facebook</label>
                                <input class="form-control" id="fb"
                                    placeholder="Akun Facebook anda." value="<?= $f['facebook']; ?>" type="text" name="facebook">
                                <p>Format: http://facebook.com/your-facebook-id</p>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-10">
                                <label for="linkedin">Linkedin</label>
                                <input class="form-control" id="twitter"
                                    placeholder="Akun Linkedin anda." value="<?= $f['linkedin']; ?>" type="text" name="linkedin" required>
                                <p>Format: linkedin.com/in/youraccount</p>
                            </div>                           
                        </div>                                                 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            <button class="btn btn-danger pull-right" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php endforeach; ?>