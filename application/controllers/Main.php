<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Main_model');
	}

	public function index() {
		$dados['titulo'] = 'Home';
		$dados['tab_postagem'] = $this->Main_model->selec_dados('postagem');

		$this->load->view('main', $dados);
	}

	public function sobre() {
		$this->load->view('sobre');
	}

	public function contato() {
		$this->load->view('contato');
	}
	public function login() {
		$this->load->view('admin/painel_controle');
	}

	public function postagem($pst_id) {
		$dados['titulo'] = 'Home';
		$dados['pst'] = $this->Main_model->selec_dado('postagem', 'pst_id', $pst_id);
		$this->load->view('postagem', $dados);

	}
}
