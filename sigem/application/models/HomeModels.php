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
	public function savedata(){
		$data = array(
			"nome"			 			=> $this->input->post('nome'),
			"data_inicio"	 			=> $this->input->post('data_inicio'),
			"data_termino"	 			=> $this->input->post('data_termino'),
			"periodo_letivo_encerrado" => $this->input->post('periodo_letivo_encerrado') == '1'? 1: 0,
			"periodo_matricula"		    => $this->input->post('periodo_matricula') == '1'? 1: 0,
			"cliente_id"			    => $this->input->post('cliente_id')
		);
		$insert = $this->db->insert('ano_letivo', $data);
		//var_dump($data);
		return $insert;
	}

		public function excluir(){
		$id = $this->input->post('cliente_id');
		var_dump($id);
		$deletar = $this->db->delete('ano_letivo', $id);
		return $deletar;
	}


	public function listar(){
		return $this->db->get("ano_letivo")->result_array();
	}

}


?>