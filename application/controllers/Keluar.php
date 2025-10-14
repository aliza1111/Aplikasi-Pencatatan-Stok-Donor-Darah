<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keluar extends CI_Controller
{
   /*
    $view berfungsi untuk membaca file view seperti read.php, create.php
    dan edit.php dengan lokasi folder views/backend/v_admin/
    */
   private $view = "backend/v_keluar/";
   //memanggil control Admin/index dalam keadaan refresh
   private $redirect = "Keluar";
   public function __construct()
   {
      parent::__construct();
      //control Admin menghubungkan model M_admin
      $this->load->model('M_keluar');
      $this->load->model('M_stok');
   }
   function index()
   {
      //memanggil model M_admin dengan function GetAll
      $read = $this->M_keluar->GetAll();
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
         'id_keluar' => $this->input->post('id_masuk'),
         'id_stok' => $this->input->post('id_stok'),
         'tanggal' => $this->input->post('tanggal'),
         'qty' => $this->input->post('qty'),
         'penerima' => $this->input->post('penerima')
      );
      $this->M_keluar->save($data);
      // Update stok darah
      $this->M_stok->updateStokDarahKeluar($this->input->post('id_stok'), $this->input->post('qty'));
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
         'edit' => $this->M_keluar->edit($kd)
      );
      $this->load->view($this->view . 'edit', $data);
   }
   public function update()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         'id_keluar' => $this->input->post('id_keluar'),
         'id_stok' => $this->input->post('id_stok'),
         'tanggal' => $this->input->post('tanggal'),
         'qty' => $this->input->post('qty'),
         'penerima' => $this->input->post('penerima')
      );

      // Mendapatkan nilai 'qty' sebelum perubahan
      $entry = $this->M_keluar->edit($kd);
      $qtySebelumnya = $entry['qty'];

      // Memperbarui kolom 'qty' pada tabel data_darah_keluar
      $this->M_keluar->update($kd, $data);

      // Memperbarui kolom 'stok' pada tabel stok_darah
      $idStokBaru = $data['id_stok'];
      $this->M_stok->updateStokDarahKeluar($idStokBaru, $data['qty']);

      // Mengembalikan qty sebelumnya pada id_stok sebelumnya yang tidak diubah
      $idStokLama = $entry['id_stok'];
      $this->M_stok->updateStokDarahKeluar($idStokLama, -$qtySebelumnya);

      redirect($this->redirect, 'refresh');
   }


   public function delete()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         'id_keluar' => $kd
      );
      // Get the quantity before deleting the entry
      $entry = $this->M_keluar->edit($kd);
      // Update stok darah
      $this->M_stok->updateStokDarahKeluar($entry['id_stok'], -$entry['qty']);
      $this->M_keluar->delete($data);
      redirect($this->redirect, 'refresh');
   }


   private function updateStokDarahKeluar($idStok, $qty)
   {
      $stok = $this->M_stok->getStokById($idStok);
      $stokBaru = $stok['stok'] - $qty;
      $this->M_stok->updateStokDarah($idStok, $stokBaru);
   }

   public function export()
   {
      $data['read'] = $this->M_keluar->GetAll(); 
      $this->load->view('backend/v_keluar/export', $data);
   }
}
