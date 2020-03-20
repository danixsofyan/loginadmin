            <!-- Container -->
            <div class="container mt-xl-80 mt-sm-30 mt-15">
                <!-- Title -->
                
                

                <div class="text-center">
					<div>
						<h2 class="hk-pg-title font-weight-600 mb-10 text-red"><?= $title; ?></h2>
						<p>Silahkan lengkapi data-data anda untuk mengikuti program ini</p>
					</div>
				</div>                
                <!-- Row -->
                <div class="row mt-xl-50 mt-sm-30 mt-15">
                <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title text-center"><i class="icon-user"></i>
                            <br>Data Pribadi</h6>
                            <?php 
                                $statusdp = 0;
                                $statusst = 0;
                                $statusfd = 0;
                                $statuspr = 0;
                            ?>
                            <?php 
                                if($user['tmptlahir'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['tgllahir'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['noidentitas'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['alamat'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['provinsi'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['kota'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['pekerjaan'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['pendidikan'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['jabatan'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['perusahaan'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($user['nohp'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }  
                                else{
                                    echo '<p class="text-center"><a class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/user').'"><span class="icon-label"><i class="fa fa-check"></i></span><span class="btn-text">Data OK</span></a><p>';
                                    $statusdp = 1;
                                }
                            ?>
                            <br>
                        </section>
                    </div>
                    <i class="fa fa-arrow-right mt-xl-70"></i>
                    <div class="col-md-2">
                        <section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title text-center"><i class="icon-rocket"></i>
                            <br>Data Startup</h6>
                            <h4 class="text-center"></h4>
                            <?php 
                                if($statusdp != 1){
                                    echo '<p class="text-center"><a class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" href="#"><span class="icon-label"><i class="fa fa-times"></i></span><span class="btn-text">belum siap</span></a><p>';
                                }else if($startup['idea_title'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['tahun_berdiri'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['image'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['jmlhfounder'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['jmlhpersonil'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['email'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['deskripsi'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['domisili'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($startup['alamat'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }
                                else{
                                    echo '<p class="text-center"><a class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/startup').'"><span class="icon-label"><i class="fa fa-check"></i></span><span class="btn-text">Data OK</span></a><p>';
                                    $statusst = 1;
                                }
                            ?>
                            <br>
                        </section>
                    </div>
                    <i class="fa fa-arrow-right mt-xl-70"></i>
                    <div class="col-md-2">
                        <section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title text-center"><i class="icon-people"></i>
                            <br>Data Founder</h6>
                            <?php 
                                if($statusst != 1){
                                    echo '<p class="text-center"><a class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" href="#"><span class="icon-label"><i class="fa fa-times"></i></span><span class="btn-text">belum siap</span></a><p>';
                                }else if($countf['jumlahfounder'] <= 1 ){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/founder').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }
                                else{
                                    echo '<p class="text-center"><a class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/founder').'"><span class="icon-label"><i class="fa fa-check"></i></span><span class="btn-text">Data OK</span></a><p>';
                                    $statusfd = 1 ;
                                }
                            ?>                            
                            <br>
                        </section>
                    </div>
                    <i class="fa fa-arrow-right mt-xl-70"></i>
                    <div class="col-md-2">
                        <section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title text-center"><i class="icon-flag"></i>
                            <br>Data Produk</h6>
                            <?php 
                                if($statusfd != 1){
                                    echo '<p class="text-center"><a class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" href="#"><span class="icon-label"><i class="fa fa-times"></i></span><span class="btn-text">belum siap</span></a><p>';
                                }else if($produk['name'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/produk').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($produk['deskripsi'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/produk').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($produk['url'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/produk').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($produk['image'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/produk').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }
                                else{
                                    echo '<p class="text-center"><a class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/produk').'"><span class="icon-label"><i class="fa fa-check"></i></span><span class="btn-text">Data OK</span></a><p>';
                                    $statuspr = 1 ;
                                }
                            ?>
                            <br>
                        </section>
                    </div>
                    <i class="fa fa-arrow-right mt-xl-70"></i>
                    <div class="col-md-2">
                        <section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title text-center"><i class="icon-notebook"></i>
                            <br>Data Proposal</h6>
                            <?php 
                                if($statuspr != 1){
                                    echo '<p class="text-center"><a class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" href="#"><span class="icon-label"><i class="fa fa-times"></i></span><span class="btn-text">belum siap</span></a><p>';
                                }else if($proposal['clnkonsumen'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['masalahkonsumen'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['jmlhkonsumen'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['ukpasar'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['uniqevalue'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['unfair'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['ujicoba'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['pernahujicoba'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['biaya'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['delchan'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['ukproduk'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['capaianvalue'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['kompetitor'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['positioning'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['teknologi'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['nonteknologi'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['revenue'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['pendanaan'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['investor'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['badanusaha'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['saham'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['harapan'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['pitchdeck'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['mockup'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['petakompetisi'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }else if($proposal['datapendukung'] == NULL){
                                    echo '<p class="text-center"><a class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-exclamation-triangle"></i></span><span class="btn-text">lengkapi</span></a><p>';
                                }
                                else{
                                    echo '<p class="text-center"><a class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm" href="'.base_url('form/proposal').'"><span class="icon-label"><i class="fa fa-check"></i></span><span class="btn-text">Data OK</span></a><p>';
                                }
                            ?>
                            <br>
                        </section>
                    </div>
                </div>
                <!-- /Row -->                
                <p class="text-center text-red mt-10"><i class="fa fa-exclamation-triangle"><br></i> Segera lengkapi!</p>
                <p class="text-center text-red mt-10"> Formulir otomatis disubmit dan tidak dapat diubah pada H-3 sebelum pendaftaran ditutup</p>
            </div>
            <!-- /Container -->