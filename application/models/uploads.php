<?php
class Uploads extends CI_Model {

  var $tabel1 = 'gambar';//tabel gambar di database sismul
  var $tabel2 = 'article';//tabel article di database sismul
  var $tabel3 = 'video';//tabel video di database sismul

    function __construct() {
        parent::__construct();
    }

    function insert_gambar($data){
       $this->db->insert($this->tabel1, $data);
       return TRUE;
    }

  //fungsi untuk select gambar
    function getGambar() {
         return $this->db->get('gambar');
    }

    //fungsi untuk select satu gambar untuk di edit
    function getSinglegambar($id) {
        return $query = $this->db->get_where('gambar', array('id' => $id));
    }

    //fungsi untuk melakukan edit data gambar
    function update_gambar($data, $id){
      $this->db->where('id', $id);
       $this->db->update($this->tabel1, $data);
       return TRUE;
    }

    //fungsi untuk menghapus gambar dari database
    function do_hapus_gambar($id) {
        $this->db->delete('gambar', array('id' => $id));
        redirect('admin/welcome/gambar');
    }

    //fungsi untuk insert musik
    function insert_musik($data){
       $this->db->insert($this->tabel2, $data);
       return TRUE;
    }

    //fungsi untuk select music
    function getMusik() {
         return $this->db->get('musik');
    }

    //fungsi untuk select satu musik untuk di edit
    function getSinglemusik($id) {
        return $query = $this->db->get_where('musik', array('id' => $id));
    }

    //fungsi untuk melakukan edit data musik
    function update_musik($data, $id){
      $this->db->where('id', $id);
      $this->db->update($this->tabel2, $data);
      return TRUE;
    }

    //fungsi untuk menghapus musik dari database
    function do_hapus_musik($id) {
      $this->db->delete('musik', array('id' => $id));
      redirect('admin/welcome/musik');
    }

    //fungsi untuk insert video
    function insert_video($data){
      $this->db->insert($this->tabel3, $data);
      return TRUE;
    }

    //fungsi untuk select video
    function getVideo() {
      return $this->db->get('video');
    }

    //fungsi untuk select satu video untuk di edit
    function getSinglevideo($id) {
      return $query = $this->db->get_where('video', array('id' => $id));
    }

    //fungsi untuk melakukan edit data video
    function update_video($data, $id){
      $this->db->where('id', $id);
      $this->db->update($this->tabel3, $data);
      return TRUE;
    }

    //fungsi untuk menghapus video dari database
    function do_hapus_video($id) {
      $this->db->delete('video', array('id' => $id));
      redirect('admin/welcome/video');
    }

}
?>
