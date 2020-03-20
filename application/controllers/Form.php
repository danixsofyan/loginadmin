<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('Form_model');
        $this->load->model('Startup_model');
    }

    public function index()
    {
        $data['title']  = 'Dashboard';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');

        if ($role == 1) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->home();
        }
    }

    public function home()
    {
        $data['title']      = 'DILo Customer validation 2020';
        $email              = $this->session->userdata('email');
        $id                 = $this->session->userdata('id');       
        $data['user']       = $this->Admin_model->getUser($email);
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];
        $data['countf']     = $this->Form_model->countFounder($idstartup);
        $data['produk']     = $this->Form_model->getProduk($idstartup);
        $data['proposal']   = $this->Form_model->getProposal($idstartup);
        

        $this->load->view('form/header', $data);
        $this->load->view('form/topbar', $data);
        $this->load->view('form/home', $data);
        $this->load->view('form/footer');
    }

    public function user()
    {
        $data['title']  = 'Data Pribadi';
        $email          = $this->session->userdata('email');       
        $data['user']   = $this->Admin_model->getUser($email);
        

        $this->load->view('form/header', $data);
        $this->load->view('form/topbar', $data);
        $this->load->view('form/datapribadi', $data);
        $this->load->view('form/footer');
    }
    
    public function updateuser()
    {
        $tgllahir = $this->input->post('birthday');
        $data = [
            'firstname'     => $this->input->post('firstname'),
            'lastname'      => $this->input->post('lastname'),
            'tmptlahir'     => $this->input->post('tmptlahir'),
            'tgllahir'      => date("Y-m-d", strtotime($tgllahir)),
            'noidentitas'   => $this->input->post('noidentitas'),
            'alamat'        => $this->input->post('alamat'),
            'provinsi'      => $this->input->post('provinsi'),
            'kota'          => $this->input->post('kota'),
            'pekerjaan'     => $this->input->post('pekerjaan'),
            'pendidikan'    => $this->input->post('pendidikan'),
            'jabatan'       => $this->input->post('jabatan'),
            'perusahaan'    => $this->input->post('perusahaan'),
            'nohp'          => $this->input->post('nohp'),
            'notlp'         => $this->input->post('notlp'),
            'fb'            => $this->input->post('fb'),
            'twitter'       => $this->input->post('twitter'),
        ];

        $id   = $this->input->post('id');
        $this->Form_model->editUser($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil disimpan!</div>');
        redirect('form/user');
    }

    public function startup()
    {
        $data['title']      = 'Data Startup';
        $email              = $this->session->userdata('email');
        $id                 = $this->session->userdata('id');
        $data['user']       = $this->Admin_model->getUser($email);         
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];
        $data['founder']    = $this->Form_model->getFounder($idstartup);
        $data['founderall'] = $this->Form_model->getFounderAll($idstartup);

        $this->load->view('form/header', $data);
        $this->load->view('form/topbar', $data);
        $this->load->view('form/startup', $data);
        $this->load->view('form/footer');
    }
    
    public function savestartup()
    {
        $id                 = $this->session->userdata('id');
        $data['strartup']   = $this->Startup_model->getStartup($id);
        

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];
        chmod($upload_image, 0755); ## this should change the permissions

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/socioide/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->Startup_model->setImage($new_image);

                $old = umask(0);
                $logofilepath = $config['upload_path'].$new_image;
    
                if(is_file($logofilepath))
                {
                    chmod($logofilepath, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> Logo tidak sesuai</div>');
                redirect('form/startup');
            }
        }

        $data = [
            'idea_title'        => $this->input->post('namastartup'),
            'tahun_berdiri'     => $this->input->post('thnberdiri'),
            'domisili'          => $this->input->post('domisili'),
            'alamat'            => $this->input->post('alamat'),
            'jmlhfounder'       => $this->input->post('jmlhfounder'),
            'jmlhpersonil'      => $this->input->post('jmlhpersonil'),
            'email'             => $this->input->post('email'),
            'facebookstartup'   => $this->input->post('facebookstartup'),
            'twitterstartup'    => $this->input->post('twitterstartup'),
            'linkedinstartup'   => $this->input->post('linkedinstartup'),
            'deskripsi'         => $this->input->post('deskripsi'),
            'created_by'        => "SYSTEM",
            'created_date'      => date("Y-m-d h:i:s"),
            'id_socio'          => $this->session->userdata('id')
        ];

        $startupready = $this->Startup_model->getStartup($id);

        if ($startupready < 1) {
            $this->Startup_model->addStartup($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil disimpan!</div>');            
        } else {
            $this->Startup_model->editStartup($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil diubah!</div>');
        }
        
        redirect('form/startup');
    }

    public function founder()
    {
        $data['title']      = 'Data Founder';
        $email              = $this->session->userdata('email');
        $id                 = $this->session->userdata('id');
        $data['user']       = $this->Admin_model->getUser($email);         
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];
        $data['founder']    = $this->Form_model->getFounder($idstartup);
        $data['founderall'] = $this->Form_model->getFounderAll($idstartup);

        $this->load->view('form/header', $data);
        $this->load->view('form/topbar', $data);
        $this->load->view('form/founder', $data);
        $this->load->view('form/footer');
    }

    public function savefounder()
    {
        $data['title']      = 'Data Startup';
        $email              = $this->session->userdata('email');
        $id                 = $this->session->userdata('id');
        $data['user']       = $this->Admin_model->getUser($email);         
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];

        // cek jika ada gambar yang akan diupload
        $upload_avafounder = $_FILES['avafounder']['name'];

        if ($upload_avafounder) {
            $config['allowed_types'] = 'gif|jpg|png|docx|doc|key|ppt|pptx|pdf';
            $config['max_size']      = '5048';
            $config['upload_path'] = './assets/socioide/founder/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('avafounder')) {
                $new_avafounder = $this->upload->data('file_name');
                $this->Form_model->setAvaFounder($new_avafounder);

                $old = umask(0);
                $logofilepath = $config['upload_path'].$new_avafounder;
    
                if(is_file($logofilepath))
                {
                    chmod($logofilepath, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> Foto tidak sesuai</div>');
                redirect('form/founder');
            }
        }

        $tgllahir = $this->input->post('birthday');
        $data = [
            'startup_id'            => $this->input->post('idstartup'),
            'name'                  => $this->input->post('name'),
            'birth_place'           => $this->input->post('birth_place'),
            'birth_date'            => date("Y-m-d", strtotime($tgllahir)),
            'email'                 => $this->input->post('email'),
            'phone'                 => $this->input->post('phone'),
            'position'              => $this->input->post('position'),
            'role'                  => $this->input->post('role'),
            'role_info'             => $this->input->post('role_info'),
            'education'             => $this->input->post('education'),
            'experience'            => $this->input->post('experience'),
            'job'                   => $this->input->post('job'),
            'skill'                 => $this->input->post('skill'),
            'skill_info'            => $this->input->post('skill_info'),
            'work_time'             => $this->input->post('work_time'),
            'work_time_info'        => $this->input->post('work_time_info'),
            'achievement'           => $this->input->post('achievement'),
            'twitter'               => $this->input->post('twitter'),
            'facebook'              => $this->input->post('facebook'),
            'linkedin'              => $this->input->post('linkedin'),
        ];

        $this->Form_model->addFounder($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil diubah!</div>');
        redirect('form/founder');
    }

    public function editfounder()
    {
        $data['title']      = 'Data Startup';
        $email              = $this->session->userdata('email');
        $id                 = $this->session->userdata('id');
        $data['user']       = $this->Admin_model->getUser($email);         
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];

        // cek jika ada gambar yang akan diupload
        $upload_avafounder = $_FILES['avafounder']['name'];

        if ($upload_avafounder) {
            $config['allowed_types'] = 'gif|jpg|png|docx|doc|key|ppt|pptx|pdf';
            $config['max_size']      = '5048';
            $config['upload_path'] = './assets/socioide/founder/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('avafounder')) {
                $new_avafounder = $this->upload->data('file_name');
                $this->Form_model->setAvaFounder($new_avafounder);

                $old = umask(0);
                $logofilepath = $config['upload_path'].$new_avafounder;
    
                if(is_file($logofilepath))
                {
                    chmod($logofilepath, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> Foto tidak sesuai</div>');
                redirect('form/founder');
            }
        }

        $tgllahir = $this->input->post('birthday');
        $data = [
            'startup_id'            => $this->input->post('idstartup'),
            'name'                  => $this->input->post('name'),
            'birth_place'           => $this->input->post('birth_place'),
            'birth_date'            => date("Y-m-d", strtotime($tgllahir)),
            'email'                 => $this->input->post('email'),
            'phone'                 => $this->input->post('phone'),
            'position'              => $this->input->post('position'),
            'role'                  => $this->input->post('role'),
            'role_info'             => $this->input->post('role_info'),
            'education'             => $this->input->post('education'),
            'experience'            => $this->input->post('experience'),
            'job'                   => $this->input->post('job'),
            'skill'                 => $this->input->post('skill'),
            'skill_info'            => $this->input->post('skill_info'),
            'work_time'             => $this->input->post('work_time'),
            'work_time_info'        => $this->input->post('work_time_info'),
            'achievement'           => $this->input->post('achievement'),
            'twitter'               => $this->input->post('twitter'),
            'facebook'              => $this->input->post('facebook'),
            'linkedin'              => $this->input->post('linkedin'),
        ];

        $idfounder = $this->input->post('idfounder');
        $this->Form_model->editFounder($idfounder, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil diubah!</div>');
        redirect('form/founder');
    }

    public function produk()
    {
        $data['title']      = 'Data Produk';
        $email              = $this->session->userdata('email');
        $id                 = $this->session->userdata('id');
        $data['user']       = $this->Admin_model->getUser($email);         
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];
        $data['produk']     = $this->Form_model->getProduk($idstartup);
        $data['kategori']   = $this->Form_model->getKategori();

        $this->load->view('form/header', $data);
        $this->load->view('form/topbar', $data);
        $this->load->view('form/produk', $data);
        $this->load->view('form/footer');
    }

    public function saveproduk()
    {
        $id                 = $this->session->userdata('id');
        $data['startup']   = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];
        $data['produk']     = $this->Form_model->getProduk($idstartup);
        $idready            = $data['produk']['id_startup'];
        

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/socioide/produk/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->Startup_model->setImage($new_image);

                $old = umask(0);
                $logofilepath = $config['upload_path'].$new_image;
    
                if(is_file($logofilepath))
                {
                    chmod($logofilepath, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> Logo tidak sesuai</div>');
                redirect('form/produk');
            }
        }

        $data = [
            'name'              => $this->input->post('namaproduk'),
            'deskripsi'         => $this->input->post('deskripsi'),
            'url'               => $this->input->post('urlproduk'),
            'id_startup'        => $this->input->post('idstartup'),            
            'created_date'      => date("Y-m-d h:i:s"),
            'created_by'        => "SYSTEM",
            'idkategori'        => $this->input->post('kategori')
        ];

        if ($idready != $idstartup) {
            $this->Startup_model->addProduk($data);            
        } else {
            $idproduk = $this->input->post('idproduk');
            $this->Startup_model->editProduk($idproduk, $data);
        }
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil diubah!</div>');
        redirect('form/produk');
    }

    public function proposal()
    {
        $data['title']      = 'Proposal';
        $email              = $this->session->userdata('email');
        $id                 = $this->session->userdata('id');
        $data['user']       = $this->Admin_model->getUser($email);         
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];
        $data['proposal']   = $this->Form_model->getProposal($idstartup);
        $data['produk']     = $this->Form_model->getProduk($idstartup);

        // $startupready = $this->Form_model->getPro($idstartup);
        // echo print_r($startupready);
        // die;

        $this->load->view('form/header', $data);
        $this->load->view('form/topbar', $data);
        $this->load->view('form/pro', $data);
        $this->load->view('form/footer');
    }

    public function savepro()
    {
        $id                 = $this->session->userdata('id');
        $data['startup']    = $this->Startup_model->getStartup($id);
        $idstartup          = $data['startup']['id_socioide'];
        $data['proposal']   = $this->Form_model->getProposal($idstartup);
        $idready            = $data['proposal']['idstartup'];
        

        // cek jika ada gambar yang akan diupload
        $upload_pitchdeck = $_FILES['pitchdeck']['name'];
        // cek jika ada gambar yang akan diupload
        $upload_mockup = $_FILES['mockup']['name'];
        // cek jika ada gambar yang akan diupload
        $upload_petakompetisi = $_FILES['petakompetisi']['name'];
        // cek jika ada gambar yang akan diupload
        $upload_datapendukung = $_FILES['datapendukung']['name'];

        if ($upload_pitchdeck) {
            $config['allowed_types'] = 'gif|jpg|png|docx|doc|key|ppt|pptx|pdf';
            $config['max_size']      = '5048';
            $config['upload_path'] = './assets/socioide/proposal/pitchdeck/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pitchdeck')) {
                $new_pitchdeck = $this->upload->data('file_name');
                $this->Form_model->setPitchDeck($new_pitchdeck);

                $new_mockup = $this->upload->data('file_name');
                $this->Form_model->setMockup($new_mockup);

                $new_petakompetisi = $this->upload->data('file_name');
                $this->Form_model->setIPetaKompetisi($new_petakompetisi);

                $new_datapendukung = $this->upload->data('file_name');
                $this->Form_model->setDataPendukung($new_datapendukung);

                $old = umask(0);
                $filepitchdeck     = $config['upload_path'].$new_pitchdeck;
                $filemockup        = $config['upload_path'].$new_mockup;
                $filepetakompetisi = $config['upload_path'].$new_petakompetisi;
                $filedatapendukung = $config['upload_path'].$new_datapendukung;
    
                if(is_file($logofilepath))
                {
                    chmod($filepitchdeck, 0777);
                    chmod($filemockup, 0777);
                    chmod($filepetakompetisi, 0777);
                    chmod($filedatapendukung, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> File tidak sesuai</div>');
                redirect('form/proposal');
            }
        }
        
        //
        if ($upload_mockup) {
            $config['allowed_types'] = 'gif|jpg|png|docx|doc|key|ppt|pptx|pdf';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/socioide/proposal/mockup/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('mockup')) {
                $new_mockup = $this->upload->data('file_name');
                $this->Form_model->setMockup($new_mockup);

                $old = umask(0);
                $logofilepath = $config['upload_path'].$new_mockup;
    
                if(is_file($logofilepath))
                {
                    chmod($logofilepath, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> File tidak sesuai</div>');
                redirect('form/proposal');
            }
        }

        //
        if ($upload_petakompetisi) {
            $config['allowed_types'] = 'gif|jpg|png|docx|doc|key|ppt|pptx|pdf';
            $config['max_size']      = '5048';
            $config['upload_path'] = './assets/socioide/proposal/petakompetisi/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('petakompetisi')) {
                $new_petakompetisi = $this->upload->data('file_name');
                $this->Form_model->setIPetaKompetisi($new_petakompetisi);

                $old = umask(0);
                $logofilepath = $config['upload_path'].$new_petakompetisi;
    
                if(is_file($logofilepath))
                {
                    chmod($logofilepath, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> File tidak sesuai</div>');
                redirect('form/proposal');
            }
        }

        //
        if ($upload_datapendukung) {
            $config['allowed_types'] = 'gif|jpg|png|docx|doc|key|ppt|pptx|pdf|zip|rar';
            $config['max_size']      = '5048';
            $config['upload_path'] = './assets/socioide/proposal/datapendukung/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('datapendukung')) {
                $new_datapendukung = $this->upload->data('file_name');
                $this->Form_model->setDataPendukung($new_datapendukung);

                $old = umask(0);
                $logofilepath = $config['upload_path'].$new_datapendukung;
    
                if(is_file($logofilepath))
                {
                    chmod($logofilepath, 0777);
                }
                umask($old);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> File tidak sesuai</div>');
                redirect('form/proposal');
            }
        }

        $data = [
            'idstartup'                 => $this->input->post('idstartup'),
            'clnkonsumen'               => $this->input->post('clnkonsumen'),
            'masalahkonsumen'           => $this->input->post('masalahkonsumen'),
            'jmlhkonsumen'              => $this->input->post('jmlhkonsumen'),
            'ukpasar'                   => $this->input->post('ukpasar'),
            'uniqevalue'                => $this->input->post('uniqevalue'),
            'unfair'                    => $this->input->post('unfair'),
            'ujicoba'                   => $this->input->post('ujicoba'),
            'pernahujicoba'             => $this->input->post('pernahujicoba'),
            'biaya'                     => $this->input->post('biaya'),
            'delchan'                   => $this->input->post('delchan'),
            'ukproduk'                  => $this->input->post('ukproduk'),
            'capaianvalue'              => $this->input->post('capaianvalue'),
            'kompetitor'                => $this->input->post('kompetitor'),
            'positioning'               => $this->input->post('positioning'),
            'teknologi'                 => $this->input->post('teknologi'),
            'nonteknologi'              => $this->input->post('nonteknologi'),
            'revenue'                   => $this->input->post('revenue'),
            'pendanaan'                 => $this->input->post('pendanaan'),
            'investor'                  => $this->input->post('investor'),
            'badanusaha'                => $this->input->post('badanusaha'),
            'saham'                     => $this->input->post('saham'),
            'harapan'                   => $this->input->post('harapan')
        ];

        $idstartuppost = $this->input->post('idstartup');
        $video = $this->input->post('videoprofile');

        $new_video = [
            'link'      => $this->input->post('videoprofile')
        ];

        if($idready != $idstartuppost){
            $this->Form_model->addProposal($data);
            $this->Form_model->editVideo($idstartuppost, $new_video);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil diubah!</div>');
        }else{
            $this->Form_model->editPro($idstartuppost, $data);
            $this->Form_model->editVideo($idstartuppost, $new_video);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i> Berhasil diubah!</div>');
        }
        
        redirect('form/proposal');
    }

    // public function upload(){

    //     // Check form submit or not
    //     if($this->input->post('upload') != NULL ){
    //     $data = array();
    
    //     // Count total files
    //     $countfiles = count($_FILES['files']['name']);

    //       // Looping all files
    //     for($i=0;$i<$countfiles;$i++){
    
    //     if(!empty($_FILES['files']['name'][$i])){
    
    //         // Define new $_FILES array - $_FILES['file']
    //         $_FILES['file']['name'] = $_FILES['files']['name'][$i];
    //         $_FILES['file']['type'] = $_FILES['files']['type'][$i];
    //         $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
    //         $_FILES['file']['error'] = $_FILES['files']['error'][$i];
    //         $_FILES['file']['size'] = $_FILES['files']['size'][$i];

    //         // Set preference
    //         $config['upload_path'] = 'uploads/'; 
    //         $config['allowed_types'] = 'jpg|jpeg|png|gif';
    //         $config['max_size'] = '5000'; // max_size in kb
    //         $config['file_name'] = $_FILES['files']['name'][$i];
    
    //         //Load upload library
    //         $this->load->library('upload',$config); 
    
    //         // File upload
    //         if($this->upload->do_upload('file')){
    //         // Get data about the file
    //         $uploadData = $this->upload->data();
    //         $filename = $uploadData['file_name'];

    //         // Initialize array
    //         $data['filenames'][] = $filename;
    //         }
    //     }
    
    //     }
    
    //     // load view
    //     $this->load->view('user_view',$data);
    // }else{

    //     // load view
    //     $this->load->view('user_view');
    // } 
    
    // }
    

}
