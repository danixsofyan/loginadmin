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
                                    <form class="needs-validation" method="post" action="<?= base_url('form/savepro'); ?>" enctype="multipart/form-data" novalidate>
                                        <input class="form-control" id="id" type="hidden" name="idproduk" value="<?= $produk['id']; ?>">
                                        <input class="form-control" id="idstartup" type="hidden" name="idstartup" value="<?= $startup['id_socioide']; ?>">
                                        <div class="form-group">
                                            <label for="clnkonsumen">Siapa calon konsumen atau calon pengguna produk
                                                anda?</label>
                                            <textarea class="form-control" id="clnkonsumen" rows="3"
                                                name="clnkonsumen" required><?= $proposal['clnkonsumen']; ?></textarea>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="masalahkonsumen">Apa permasalahan calon kunsumen atau calon
                                                pengguna yang dipecahkan oleh produk Anda?</label>
                                            <textarea class="form-control" id="masalahkonsumen" rows="3"
                                                name="masalahkonsumen" required><?= $proposal['masalahkonsumen']; ?></textarea>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jmlhkonsumen">Berapa jumlah calon konsumen dan user yang
                                                anda interview?</label>
                                            <textarea class="form-control" id="jmlhkonsumen" rows="3"
                                                name="jmlhkonsumen" required><?= $proposal['jmlhkonsumen']; ?></textarea>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ukpasar">Berapa besar ukuran pasar produk Anda?</label>
                                            <textarea class="form-control" id="ukpasar" rows="3"
                                                name="ukpasar" required><?= $proposal['ukpasar']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="uniqevalue">Jelaskan unique value yang Anda tawarkan kepada
                                                calon pengguna produk Anda?</label>
                                            <textarea class="form-control" id="uniqevalue" rows="3"
                                                name="uniqevalue" required><?= $proposal['uniqevalue']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="unfair">Apa unfair advantage (aspek yang tidak mudah ditiru
                                                pihak lain) dari produk yang Anda kembangkan?</label>
                                            <textarea class="form-control" id="unfair" rows="3"
                                                name="unfair" required><?= $proposal['unfair']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ujicoba">Apakah produk Anda pernah diujicoba atau
                                                diimplementasikan sebelumnya?</label>
                                            <textarea class="form-control" id="ujicoba" rows="3"
                                                name="ujicoba" required><?= $proposal['ujicoba']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pernahujicoba">Jika pernah, bagaimana respon pengguna?
                                                Dapatkah memecahkan masalah mereka?</label>
                                            <textarea class="form-control" id="pernahujicoba" rows="3"
                                                name="pernahujicoba" required><?= $proposal['pernahujicoba']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="biaya">Jelaskan struktur biaya pengembangan produk
                                                Anda</label>
                                            <textarea class="form-control" id="biaya" rows="3"
                                                name="biaya" required><?= $proposal['biaya']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="delchan">Delivery channel apa yang akan Anda
                                                gunakan?</label>
                                            <textarea class="form-control" id="delchan" rows="3"
                                                name="delchan" required><?= $proposal['delchan']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ukproduk">Parameter apa yang akan Anda gunakan untuk
                                                mengukur keberhasilan produk / service yang Anda kembangkan?</label>
                                            <textarea class="form-control" id="ukproduk" rows="3"
                                                name="ukproduk" required><?= $proposal['ukproduk']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="capaianvalue">Bagaimana pencapaian value yang sudah diterima
                                                oleh customer?</label>
                                            <textarea class="form-control" id="capaianvalue" rows="3"
                                                name="capaianvalue" required><?= $proposal['capaianvalue']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="kompetitor">Sebutkan Kompetitor Anda</label>
                                            <textarea class="form-control" id="kompetitor" rows="3"
                                                name="kompetitor" required><?= $proposal['kompetitor']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="positioning">Bagaimana positioning produk Anda terhadap
                                                kompetitor?</label>
                                            <textarea class="form-control" id="positioning" rows="3"
                                                name="positioning" required><?= $proposal['positioning']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="teknologi">Apa keunggulan teknologi Anda dibanding dengan
                                                kompetitor?</label>
                                            <textarea class="form-control" id="teknologi" rows="3"
                                                name="teknologi" required><?= $proposal['teknologi']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nonteknologi">Apa keunggulan non-teknologi Anda dibanding
                                                dengan kompetitor (misalnya model bisnis, strategic/eksklusif
                                                partner)?</label>
                                            <textarea class="form-control" id="nonteknologi" rows="3"
                                                name="nonteknologi" required><?= $proposal['nonteknologi']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="revenue">Apabila sudah memiliki traction maupun revenue,
                                                jelaskan secara detail</label>
                                            <textarea class="form-control" id="revenue" rows="3"
                                                name="revenue" required><?= $proposal['revenue']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendanaan">Apabila sudah mempunyai pendanaan, berapa besar
                                                nilainya? Dan dari mana sumbernya? </label>
                                            <textarea class="form-control" id="pendanaan" rows="3"
                                                name="pendanaan" required><?= $proposal['pendanaan']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="investor">Apakah pihak investor/penyandang dana tidak
                                                keberatan apabila Anda ikut serta dalam Program Inkubasi dan
                                                Akselerasi Indigo Creative Nation?</label>
                                            <textarea class="form-control" id="investor" rows="3"
                                                name="investor" required><?= $proposal['investor']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="badanusaha" required>Apakah startup Anda sudah berbentuk badan usaha?
                                            </label>
                                            <textarea class="form-control" id="badanusaha" rows="3"
                                                name="badanusaha" required><?= $proposal['badanusaha']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="saham"> Jika sudah, Siapa saja pemegang saham Perusahaan
                                                Anda dan berapa besar kepemilikannya?
                                                Jika belum, Bagaimana rencana persentase kepemilikan saham
                                                perusahaan antara Founder/Co- Founder/Orang lain?</label>
                                            <textarea class="form-control" id="saham" rows="3"
                                                name="saham" required><?= $proposal['saham']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="harapan"> Apa yang Anda harapkan dengan mengikuti program
                                                Indigo Creative Nation ini?</label>
                                            <textarea class="form-control" id="harapan" rows="3"
                                                name="harapan" required><?= $proposal['harapan']; ?></textarea>
                                                <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="videoprofile">Video Profil Tim dan Ide</label>
                                            <input class="form-control" id="videoprofile"
                                                placeholder="Video Profil Tim dan Ide" type="text"
                                                name="videoprofile" value="<?= $startup['link']; ?>" required>
                                            <p>Ex : https://www.youtube.com/watch?..</p>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Required
                                            </div>
                                        </div>
                                        <div class="form-group">                                            
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <section class="hk-sec-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="hk-sec-title">Slide Pitch Deck</h5>
                                                                <p class="mb-40">Wajib mengandung informasi dari pertanyaan di form proposal ini (PPT / PDF max
                                                5 MB)</p>
                                                                <?php 
                                                                    if($proposal['pitchdeck'] == NULL){
                                                                        echo 'File belum diupload';
                                                                    } else{
                                                                        echo '<a href="'.base_url('assets/socioide/proposal/pitchdeck/') . $proposal['pitchdeck'].'" target="_blank" class="btn btn-outline-light btn-sm">Lihat File</a>';
                                                                    }
                                                                ?>
                                                                <input type="file" class="dropify" id="pitchdeck" name="pitchdeck"/>
                                                            </div>                                                        
                                                        </div>
                                                    </section>
                                                </div>	
                                            </div>                                            
                                        </div> 
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <section class="hk-sec-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h5 class="hk-sec-title">Gambar Mockup Produk</h5>
                                                            <p class="mb-40">Upload file gambar, yang yang menceritakan tentang produk kamu. (Maks. 2MB)</p>
                                                            <?php 
                                                                if($proposal['mockup'] == NULL){
                                                                    echo 'File belum diupload';
                                                                } else{
                                                                    echo '<a href="'.base_url('assets/socioide/proposal/pitchdeck/') . $proposal['mockup'].'" target="_blank" class="btn btn-outline-light btn-sm">Lihat File</a>';
                                                                }
                                                            ?>
                                                            <input type="file" class="dropify" id="mockup" name="mockup"/>
                                                        </div>                                                        
                                                    </div>
                                                </section>
                                            </div>	
                                        </div>
                                        <div class="form-group">                                            
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <section class="hk-sec-wrapper">
                                                        <div class="row">                                                                
                                                            <div class="col-md-12">
                                                            <h5 class="hk-sec-title">Peta Kompetisi</h5>
                                                            <p class="mb-40">File PDF (max 5 MB). Contoh:</p>
                                                            <?php 
                                                                if($proposal['petakompetisi'] == NULL){
                                                                    echo 'File belum diupload';
                                                                } else{
                                                                    echo '<a href="'.base_url('assets/socioide/proposal/pitchdeck/') . $proposal['petakompetisi'].'" target="_blank" class="btn btn-outline-light btn-sm">Lihat File</a>';
                                                                }
                                                            ?>
                                                                <img src="<?=base_url('assets/user/peta.png')?>" class="img-thumbnail">
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <input type="file" id="input-file-now" class="dropify" id="petakompetisi" name="petakompetisi"/>
                                                            </div>                                                        
                                                        </div>                                                        
                                                    </section>
                                                </div>	
                                            </div>                                            
                                        </div> 
                                        <div class="form-group">                                            
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <section class="hk-sec-wrapper">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="hk-sec-title">Data pendukung lainnya</h5>
                                                                <p class="mb-40">(Capital Table, Term Sheet dengan investor sebelumnya, Profit Loss report, Balance Sheet report, etc.) (max 5 MB)</p>
                                                                <?php 
                                                                    if($proposal['datapendukung'] == NULL){
                                                                        echo 'File belum diupload';
                                                                    } else{
                                                                        echo '<a href="'.base_url('assets/socioide/proposal/pitchdeck/') . $proposal['datapendukung'].'" target="_blank" class="btn btn-outline-light btn-sm">Lihat File</a>';
                                                                    }
                                                                ?>
                                                                <input type="file" id="input-file-now" class="dropify" id="datapendukung" name="datapendukung"/>
                                                            </div>                                                        
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>	
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