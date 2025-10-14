<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Masuk extends CI_Controller
{
   /*
    $view berfungsi untuk membaca file view seperti read.php, create.php
    dan edit.php dengan lokasi folder views/backend/v_admin/
    */
   private $view = "backend/v_masuk/";
   //memanggil control Admin/index dalam keadaan refresh
   private $redirect = "Masuk";
   public function __construct()
   {
      parent::__construct();
      //control Admin menghubungkan model M_admin
      $this->load->model('M_masuk');
      $this->load->model('M_stok');
   }
   function index()
   {
      //memanggil model M_admin dengan function GetAll
      $read = $this->M_masuk->GetAll();
      $data = array(
         //'read' variabel yang akan dipanggil pada view read.php
         'read' => $read
      );
      /*
        dengan $this->view artinya memanggil private $view="backend/v_admin/"
        dilanjutkan dengan 'read' untuk memanggil read.php
        */
      $this->load->view($this->view . 'read', $data);
   }
   public function create()
   {
      //untuk create tidak memangil model, langsung ke view dengan data baru
      $data = array(
         'stok_darah' => $this->M_stok->GetAll(),
         'create' => ''
      );
      $this->load->view($this->view . 'create', $data);
   }
   public function save()
   {
      $data = array(
         'id_masuk' => $this->input->post('id_masuk'),
         'id_stok' => $this->input->post('id_stok'),
         'tanggal' => $this->input->post('tanggal'),
         'qty' => $this->input->post('qty'),
         'pendonor' => $this->input->post('pendonor')
      );
      $this->M_masuk->save($data);
      // Update stok darah
      $this->M_stok->updateStokDarahMasuk($this->input->post('id_stok'), $this->input->post('qty'));
      redirect($this->redirect, 'refresh');
   }

   public function edit()
   {
      /*
        segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
        data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
        */
      $kd = $this->uri->segment(3);
      $data = array(
         //'edit' variabel yang akan dipanggil pada view edit.php
         'stok_darah' => $this->M_stok->GetAll(),
         'edit' => $this->M_masuk->edit($kd)
      );
      $this->load->view($this->view . 'edit', $data);
   }
   public function update()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         'id_masuk' => $this->input->post('id_masuk'),
         'id_stok' => $this->input->post('id_stok'),
         'tanggal' => $this->input->post('tanggal'),
         'qty' => $this->input->post('qty'),
         'pendonor' => $this->input->post('pendonor')
      );

      // Mendapatkan nilai 'qty' sebelum perubahan
      $entry = $this->M_masuk->edit($kd);
      $qtySebelumnya = $entry['qty'];

      // Memperbarui kolom 'qty' pada tabel data_darah_masuk
      $this->M_masuk->update($kd, $data);

      // Memperbarui kolom 'stok' pada tabel stok_darah
      $idStokBaru = $data['id_stok'];
      $this->M_stok->updateStokDarahMasuk($idStokBaru, $data['qty']);

      // Mengembalikan qty sebelumnya pada id_stok sebelumnya yang tidak diubah
      $idStokLama = $entry['id_stok'];
      $this->M_stok->updateStokDarahMasuk($idStokLama, -$qtySebelumnya);

      redirect($this->redirect, 'refresh');
   }

   public function delete()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         'id_masuk' => $kd
      );
      // Get the quantity before deleting the entry
      $entry = $this->M_masuk->edit($kd);
      // Update stok darah
      $this->M_stok->updateStokDarahMasuk($entry['id_stok'], -$entry['qty']);
      $this->M_masuk->delete($data);
      redirect($this->redirect, 'refresh');
   }


   private function updateStokDarahMasuk($idStok, $qty)
   {
      $stok = $this->M_stok->getStokById($idStok);
      $stokBaru = $stok['stok'] + $qty;
      $this->M_stok->updateStokDarah($idStok, $stokBaru);
   }

   public function export()
   {
      $data['read'] = $this->M_masuk->GetAll(); 
      $this->load->view('backend/v_masuk/export', $data);
   }
}
