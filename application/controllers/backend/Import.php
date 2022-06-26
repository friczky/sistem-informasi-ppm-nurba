<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory ;

class Import extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('ImportSantri');
	}

	public function index()
	{
		echo "Import Controller";
	}

	public function santri(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xlsx|xls';
		$config['file_name'] = 'doc' . time();
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('excel')){
			$file = $this->upload->data();

			$reader = ReaderEntityFactory::createXLSXReader();
			$reader->open('uploads/'.$file['file_name']);
			foreach ($reader->getSheetIterator() as $sheet) {
				$numRow =1 ;
				foreach ($sheet->getRowIterator() as $row) {
					if ($numRow > 1) {
						$data_santri = array(
							'nama'			=>$row->getCellAtIndex(0),
							'nama_wali'		=>$row->getCellAtIndex(1),
							'tempat_lahir'	=>$row->getCellAtIndex(2),
							'tanggal_lahir'	=>$row->getCellAtIndex(3),
							'telpon'		=>$row->getCellAtIndex(4),
							'telpon_wali'	=>$row->getCellAtIndex(5),
							'kampus'		=>$row->getCellAtIndex(6),
							'angkatan'		=>$row->getCellAtIndex(7),
						);
						$this->ImportModel->import($data_santri);
					}
					$numRow++;
				}
				$reader->close();
				unlink('uploads/'.$file['file_name']);
				$this->session->set_flashdata('success', '<div class="alert alert-success">Data berhasil diimport!</div>');
				redirect('dashboard/santri');
			}
		}else {
			echo "Error :" . $this->upload->display_errors();
		}
	}

	public function reset(){
		$this->db->empty_table('tb_anggota');
		$this->session->set_flashdata('success', '<div class="alert alert-success">Data berhasil direset!</div>');
		redirect('admin/tamu');
	}

}
