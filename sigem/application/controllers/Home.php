<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
	$this->load->view('Home/index');
	}
	/**
	 * Lista os dados do banco
	 */

	public function listar()
	{
		$lista = $this->HomeModels->listar();
		$dados = array("linhas" => $lista);
		$this->load->view('Home/exibir', $dados);
	}
	/**
	 * Coleta os dados do formulario e passa para a função que inicializa a inserção no banco
	 * @author David Souza
	 * @version 1.0
	 * @copyright 2019 IMAP
	 */
	public function save(){
		$data = array(
			"nome"			 			=> $this->input->post('nome'),
			"data_inicio"	 			=> $this->input->post('data_inicio'),
			"data_termino"	 			=> $this->input->post('data_termino'),
			"periodo_letivo_encerrado" => $this->input->post('periodo_letivo_encerrado') == '1'? 1: 0,
			"periodo_matricula"		    => $this->input->post('periodo_matricula') == '1'? 1: 0,
			"cliente_id"			    => $this->input->post('cliente_id')
		);
		$this->HomeModels->savedata($data);
		redirect('home/index');		
	}

	public function delete(){
		$id = $this->input->get('id');
		$this->HomeModels->excluir($id);
		//redirect('home/index');		
	}
}
?>