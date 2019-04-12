<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model utilizado na controler Home
 */
class HomeModels extends CI_Model
{

	/**
	 * Recebe os dados do formulario e grava no banco do sigem
	 * @param array $dados Array Contendo todos os dados do passado através do formulario
	 */
	public function savedata($data){
		$insert = $this->db->insert('ano_letivo', $data);	
		return $insert;
	}

	public function excluir($id){
		var_dump($id);
		$this->db->where('id', $id);
		$deletar = $this->db->delete('ano_letivo', $id);
		var_dump($deletar);
		return $deletar;
	}


	public function listar(){
		return $this->db->get("ano_letivo")->result_array();
	}

}


?>