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
                                    <form class="needs-validation" method="post" action="<?= base_url('form/savestartup'); ?>" enctype="multipart/form-data" novalidate>   
                                    <input class="form-control" id="id" type="hidden" name="id" value="<?= $user['id']; ?>">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                                <label for="namastartup">Nama Startup</label>
                                                <input class="form-control" id="namastartup"
                                                    placeholder="Nama startup kamu" type="text" name="namastartup"
                                                    value="<?= $startup['idea_title']; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="thnberdiri">Tahun Berdiri Team</label>
                                                <input class="form-control" id="thnberdiri"
                                                    placeholder="isi dengan tahun dibentuknya startup." type="number" name="thnberdiri"
                                                    value="<?= $startup['tahun_berdiri']; ?>" required>                                                
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">                                            
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <section class="hk-sec-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <?php 
                                                                    if($startup['image'] == NULL){
                                                                        echo '<img src="'.base_url('assets/socioide/default.jpg').'" class="img-thumbnail">';
                                                                    } else{
                                                                        echo '<img src="'.base_url('assets/socioide/') . $startup['image'].'" class="img-thumbnail">';
                                                                    }
                                                                ?>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="hk-sec-title">Logo Startup</h5>
                                                                <p class="mb-40">Upload logo kamu dalam resolusi tinggi (Maks. 2MB)</p>
                                                                <input type="file" id="input-file-now" class="dropify" id="image" name="image"/>
                                                            </div>                                                        
                                                        </div>
                                                    </section>
                                                </div>	
                                            </div>                                            
                                        </div>                                      
                                        <div class="form-row">
                                            <div class="col-md-12 mb-10">
                                                <label for="domisili">Kota Domisili Startup</label>
                                                <input type="text" class="form-control" id="domisili" name="domisili"
                                                    placeholder="Domisili" value="<?= $startup['domisili']; ?>" required>
                                                    <div class="valid-feedback">
                                                    Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    Required
                                                    </div>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3"
                                                name="alamat" required><?= $startup['alamat']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                Required
                                                </div>
                                        </div>                                           
                                        <div class="form-group">
                                            <label for="jmlhfounder">Jumlah Founder & Co Founder</label>
                                            <input class="form-control" id="jmlhfounder"
                                                placeholder="Jumlah Founder & Co Founder" type="number"
                                                name="jmlhfounder" value="<?= $startup['jmlhfounder']; ?>" required>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                Required
                                                </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="jmlhpersonil">Jumlah Personil diluar Co Founder</label>
                                            <input class="form-control" id="jmlhpersonil"
                                                placeholder="Jumlah Pegawai dan / atau Outsource"
                                                type="number" name="jmlhpersonil" value="<?= $startup['jmlhpersonil']; ?>" required>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                Required
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="emailstartup">Alamat Email</label>
                                                <input class="form-control" id="emailstartup"
                                                    placeholder="silahkan isi alamat email startup." type="email"
                                                    name="email" value="<?= $startup['email']; ?>" required>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                Required
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mb-10">
                                                    <label for="facebookstartup">Facebook</label>
                                                    <input class="form-control" id="facebookstartup"
                                                        placeholder="Akun Facebook Startup Anda." type="text"
                                                        name="facebookstartup" value="<?= $startup['facebookstartup']; ?>">
                                                </div>
                                                <div class="col-md-4 mb-10">
                                                    <label for="twitterstartup">Twitter</label>
                                                    <input class="form-control" id="twitter"
                                                        placeholder="Akun Twitter Startup Anda." type="text"
                                                        name="twitterstartup" value="<?= $startup['twitterstartup']; ?>">
                                                </div>
                                                <div class="col-md-4 mb-10">
                                                    <label for="linkedinstartup">ID Linkedin</label>
                                                    <input class="form-control" id="linkedinstartup"
                                                        placeholder="Akun Twitter Startup Anda." type="text"
                                                        name="linkedinstartup" value="<?= $startup['linkedinstartup']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="decsstartup">Deskripsi Startup</label>
                                                <textarea class="form-control" id="decsstartup" rows="10"
                                                    name="deskripsi" required><?= $startup['deskripsi']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                Required
                                                </div>
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