<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model utilizado na controler Home
 */
class HomeModels extends CI_Model
{

	/**
	 * Recebe os dados do formulario e grava no banco do sigem
	 * @param array $data Array Contendo todos os dados do passado através do formulario
	 * @author David Souza
	 * @version 1.1
	 * @copyright 2019 IMAP
	 */
	public function savedata($data){
		$insert = $this->db->insert('ano_letivo', $data);	
		return $insert;
	}
	/**
	 * Função para excluir um registro no banco
	 * @param int $id Primary key do registro
	 * @author David Souza
	 */
	public function excluir($id){		
		$deletar = $this->db->delete('ano_letivo', array('id' => $id));
		var_dump($deletar);
		return $deletar;
	}
	/**
	 * Função para listar todos os registros do banco
	 * @author David Souza
	 */
	public function listar(){
		return $this->db->get("ano_letivo")->result_array();
	}

}


?>