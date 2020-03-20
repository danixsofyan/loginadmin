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
                                    <form class="needs-validation" method="post" action="<?= base_url('form/saveproduk'); ?>" enctype="multipart/form-data" novalidate>
                                    <input class="form-control" id="id" type="hidden" name="idproduk" value="<?= $produk['id']; ?>">
                                    <input class="form-control" id="idstartup" type="hidden" name="idstartup" value="<?= $startup['id_socioide']; ?>">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                                <label for="namaproduk">Nama Produk</label>
                                                <input class="form-control" id="namaproduk"
                                                    placeholder="Nama produk kamu" type="text" name="namaproduk"
                                                    value="<?= $produk['name']; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="urlproduk">URL website produk kamu</label>
                                                <input class="form-control" id="urlproduk"
                                                    placeholder="http://sample.com" type="url" name="urlproduk"
                                                    value="<?= $produk['url']; ?>" required>                                                
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
                                                                    if($produk['image'] == NULL){
                                                                        echo '<img src="'.base_url('assets/socioide/default.jpg').'" class="img-thumbnail">';
                                                                    } else{
                                                                        echo '<img src="'.base_url('assets/socioide/produk/') . $produk['image'].'" class="img-thumbnail">';
                                                                    }
                                                                ?>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 class="hk-sec-title">Logo Produk</h5>
                                                                <p class="mb-40">Upload logo produk kamu dalam resolusi tinggi (Maks. 2MB)</p>
                                                                <input type="file" id="input-file-now" class="dropify" id="image" name="image"/>
                                                            </div>                                                        
                                                        </div>                                                        
                                                    </section>
                                                </div>	
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control custom-select d-block w-100" id="kategori" name="kategori" required>
                                                <option>Pilih bidang bisnis startup</option>
                                                <?php foreach( $kategori as $k ) : ?>
                                                    <?php if( $k['id'] == $produk['idkategori'] ) : ?>
                                                        <option value="<?= $k['id']; ?>" selected><?= $k['nama_bidang_usaha']; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $k['id']; ?>"><?= $k['nama_bidang_usaha']; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="decsstartup">Deskripsi Startup</label>
                                            <textarea class="form-control" id="decsstartup" rows="10"
                                                name="deskripsi" required><?= $produk['deskripsi']; ?></textarea>
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