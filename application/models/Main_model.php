	<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Main_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	//Insert
	function add_dados($tabela, $parametros) {
		$this->db->insert($tabela, $parametros);
		return $this->db->insert_id();
	}

	//Select All
	function selec_dados($tabela) {
		// $this->db->order_by('user_id', 'asc');
		return $this->db->get($tabela)->result_array();
	}

	//Select + Where
	function selec_dado($tabela, $campo, $id) {
		return $this->db->get_where($tabela, array($campo => $id))->row_array();
	}

	//Update
	function update_dados($tabela, $id, $parametros) {
		$this->db->where('user_id', $id);
		return $this->db->update($tabela, $parametros);
	}

	//Apagar
	function apagar_dados($tabela, $id) {
		return $this->db->delete($tabela, array('user_id' => $id));
	}

}
