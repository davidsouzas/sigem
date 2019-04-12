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
		$this->HomeModels->savedata();
		redirect('home/index');		
	}

	public function delete(){
		$this->HomeModels->excluir();
		redirect('home/index');		
	}
}
?>