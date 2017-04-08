<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('uploads'); //load model uploads yang berada di folder model
        $this->load->helper(array('url')); //load helper url
        if (!$this->session->userdata('logged_in')) {
            redirect('admin/login');
					}
				}


	public function index()
	{
		$this->load->view('admin/index');
	}

    //gambar
	public function gambar()
	{
		$data['record'] = $this->uploads->getGambar();
    $this->load->view('admin/gambar',$data);
	}

	//untuk menampilkan halaman tambahgambar
	public function tambahgambar()
  {
    $this->load->view('admin/tambahgambar', array('error' => ' ' ));
  }

//untuk menginsert gambar kedalam database
	public function insert_gambar(){
		$this->load->library('upload');
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    $config['upload_path'] = './uploads/gallery/'; //path folder
  	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '200488'; //maksimum besar file 20M
    $config['file_name'] = $nmfile; //nama yang terupload nantinya
		$this->upload->initialize($config);

		if($_FILES['gambar']['name'])
		{
			if (!$this->upload->do_upload('gambar'))
			{
				$error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/tambahgambar', $error);
				//redirect('admin/welcome/tambahgambar'); //jika gagal maka akan ditampilkan form tambahgambar

        	}else{

          	$gbr = $this->upload->data();
            $data = array(
            'nama_gambar' =>$this->input->post('nama_gambar'),
            'deskripsi_gambar' =>$this->input->post('deskripsi_gambar'),
            'gambar' =>$gbr['file_name']
            );

            $this->uploads->insert_gambar($data); //akses model untuk menyimpan ke database
            redirect('admin/welcome/gambar'); //jika berhasil maka akan ditampilkan view gambar

            }
        }
    }

		//tampilkan halaman edit gambar
    function editgambar($id) {
        $data['record'] = $this->uploads->getSinglegambar($id)->result();
        $this->load->view('admin/editgambar', $data);
    }

    //melakukan edit gambar
    public function update_gambar(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/gallery'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20488'; //maksimum besar file 20M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
				$this->upload->initialize($config);

        if($_FILES['gambar']['name'])
        {
            if (!$this->upload->do_upload('gambar'))
            {
                redirect('admin/welcome/gambar'); //jika gagal maka akan ditampilkan form upload

                }else{

                $gbr = $this->upload->data();
                $data = array(
                  'nama_gambar' =>$this->input->post('nama_gambar'),
                  'deskripsi_gambar' =>$this->input->post('deskripsi_gambar'),
                  'gambar' =>$gbr['file_name']
                );

                $this->uploads->update_gambar($data, $this->input->post('id')); //akses model untuk menyimpan ke database
                redirect('admin/welcome/gambar'); //jika berhasil maka akan ditampilkan view gambar

            }
        }

        $data = array(

                  'nama_gambar' =>$this->input->post('nama_gambar'),
                  'deskripsi_gambar' =>$this->input->post('deskripsi_gambar'),
                  'gambar' =>$this->input->post('gambar')
                );
								$this->uploads->update_gambar($data, $this->input->post('id')); //akses model untuk menyimpan ke database
                redirect('admin/welcome/gambar'); //jika berhasil maka akan ditampilkan view gambar
    }

		//melakukan hapus gambar
    function do_hapus_gambar($id) {
        $this->uploads->do_hapus_gambar($id);
    }


  //musik
  public function musik()
  {
		$data['record'] = $this->uploads->getMusik();//query dari model
    $this->load->view('admin/musik',$data);
  }

	//untuk menampilkan halaman tambahmusik
public function tambahmusik()
  {
    $this->load->view('admin/tambahmusik',array('error' => ' ' ));
  }

//untuk melakukan insert musik
  public function insert_musik(){
       $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/musik/'; //path folder
        $config['allowed_types'] = 'mp3|wav|aac|ogg|wma|vlac|mp4|pcm'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20488'; //maksimum besar file 20M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
				$this->upload->initialize($config);

        if($_FILES['musik']['name'])
        {
            if (!$this->upload->do_upload('musik'))
            {
							$error = array('error' => $this->upload->display_errors());
              $this->load->view('admin/tambahmusik',$error); //jika gagal maka akan ditampilkan form tambahmusik
							//redirect('admin/welcome/tambahmusik'); //jika gagal maka akan ditampilkan form tambahmusik

                }else{

                $gbr = $this->upload->data();
                $data = array(
                  'nama_musik' =>$this->input->post('nama_musik'),
                  'penyanyi' =>$this->input->post('penyanyi'),
                  'musik' =>$gbr['file_name']
                );

                  $this->uploads->insert_musik($data); //akses model untuk menyimpan ke database
                redirect('admin/welcome/musik'); //jika berhasil maka akan ditampilkan view musik

            }
        }
    }

		//tampilkan halaman edit musik
    function editmusik($id) {
        $data['record'] = $this->uploads->getSinglemusik($id)->result();
        $this->load->view('admin/editmusik', $data);
    }

    //untuk melakukan edit musik
    public function update_musik(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/music'; //path folder
        $config['allowed_types'] = 'mp3|wav|aac|ogg|wma|vlac|mp4|pcmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20488'; //maksimum besar file 20M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
				$this->upload->initialize($config);

        if($_FILES['musik']['name'])
        {
            if (!$this->upload->do_upload('musik'))
            {
                redirect('admin/welcome/musik'); //jika gagal maka akan ditampilkan form musik

                }else{

                $gbr = $this->upload->data();
                $data = array(
                  'nama_musik' =>$this->input->post('nama_musik'),
                  'penyanyi' =>$this->input->post('penyanyi'),
                  'musik' =>$gbr['file_name']
                );

                $this->uploads->update_musik($data, $this->input->post('id')); //akses model untuk menyimpan ke database
                redirect('admin/welcome/musik'); //jika berhasil maka akan ditampilkan view musik

            }
        }

        $data = array(

                  'nama_musik' =>$this->input->post('nama_musik'),
                  'penyanyi' =>$this->input->post('penyanyi'),
                  'musik' =>$this->input->post('musik')
                );
								$this->uploads->update_musik($data, $this->input->post('id')); //akses model untuk menyimpan ke database
                redirect('admin/welcome/musik'); //jika berhasil maka akan ditampilkan view musik
    }

		//melakukan hapus musik
    function do_hapus_musik($id) {
        $this->uploads->do_hapus_musik($id);
    }


  //video
  public function video()
  {
		$data['record'] = $this->uploads->getVideo();
    $this->load->view('admin/video',$data);
  }

	//untuk menampilkan halaman tambahvideo
    public function tambahvideo()
    {
        $this->load->view('admin/tambahvideo', array('error' => ' ' ));
    }

    //untuk melakukan insert video
    public function insert_video(){
       $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/videos/'; //path folder
        $config['allowed_types'] = 'mp4|3gp|flv|wmv|mpeg|avi|asf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '200488'; //maksimum besar file 20M
				$config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['video']['name'])
        {
            if (!$this->upload->do_upload('video'))
            {
							$error = array('error' => $this->upload->display_errors());
							$this->load->view('admin/tambahvideo',$error);
								//redirect('admin/welcome/tambahvideo'); //jika gagal maka akan ditampilkan form tambahvideo

                }else{

                $gbr = $this->upload->data();
                $data = array(
                  'nama_video' =>$this->input->post('nama_video'),
                  'deskripsi_video' =>$this->input->post('deskripsi_video'),
                  'video' =>$gbr['file_name']
                );

                  $this->uploads->insert_video($data); //akses model untuk menyimpan ke database
                redirect('admin/welcome/video'); //jika berhasil maka akan ditampilkan view video

            }
        }
    }

		//untuk menampilkan halaman editvideo
    function editvideo($id) {
        $data['record'] = $this->uploads->getSinglevideo($id)->result();
        $this->load->view('admin/editvideo', $data);
    }

    //untuk melakukan edit video
    public function update_video(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './uploads/videos'; //path folder
        $config['allowed_types'] = 'mp4|3gp|flv|wmv|mpeg|avi|asf;'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20488'; //maksimum besar file 20M
				$config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['video']['name'])
        {
            if (!$this->upload->do_upload('video'))
            {
                redirect('admin/welcome/video'); //jika gagal maka akan ditampilkan view video

                }else{

                $gbr = $this->upload->data();
                $data = array(
                  'nama_video' =>$this->input->post('nama_video'),
                  'deskripsi_video' =>$this->input->post('deskripsi_video'),
                  'video' =>$gbr['file_name']
                );

                $this->uploads->update_video($data, $this->input->post('id')); //akses model untuk menyimpan ke database
                redirect('admin/welcome/video'); //jika berhasil maka akan ditampilkan view video

            }
        }

        $data = array(

                  'nama_video' =>$this->input->post('nama_video'),
                  'deskripsi_video' =>$this->input->post('deskripsi_video'),
                  'video' =>$this->input->post('video')
									);

                $this->uploads->update_video($data, $this->input->post('id')); //akses model untuk menyimpan ke database
                redirect('admin/welcome/video'); //jika berhasil maka akan ditampilkan view video
    }

		//melakukan hapus video
    function do_hapus_video($id) {
        $this->uploads->do_hapus_video($id);
    }



//logout
	function logout() {
    $this->session->unset_userdata('logged_in');
    redirect('admin/login', 'refresh');
  }

}
