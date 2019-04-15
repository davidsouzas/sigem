<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url('css/estilo.css');?>" rel="stylesheet" type="text/css" />
	<title>Atualizar Registro</title>
</head>
<body>
	<h2>Atualizar Registro</h2>

	<?php
	$attributes = array('class' => 'form_home', 'style' => "border: 1px solid black");
	echo form_open('Home/update', $attributes);
?>
<p>
	<?php echo form_label("Nome:"); ?>
	<?php
		$data = array(
			'name' => 'nome',
			'value' => $row->nome,
			'placeholder' => 'Insira o nome',
			'id' => 'nome'
		);
	?>
	<?php echo form_input($data); ?>
</p>

<p>
	<?php echo form_label("Data de Inicio das Aulas:"); ?>
	<?php
		$data = array(
			'name' => 'data_inicio',
			'value' => $row->data_inicio,
			'placeholder' => 'Insira o nome',
			'id' => 'data_inicio',
			'type' => 'date'
		);
	?>
	<?php echo form_input($data); ?>

	<?php echo form_label("Data de Término das Aulas:"); ?>
	<?php
		$data = array(
			'name' => 'data_termino',
			'value' => $row->data_termino,
			'id' => 'data_termino',
			'type' => 'date'
		);
	?>
	<?php echo form_input($data); ?>
</p> 

<p>
	<?php echo form_label("Periodo Letivo Encerrado ?"); ?>
	<?php
		$data = array(
			'name' => 'periodo_letivo_encerrado',
			'id' => 'periodo_letivo_encerrado',
			'checked' => 'checked'
		);

		if ($row->periodo_letivo_encerrado != 1) {
			$data['checked'] = null;
		}
	?>
	<?php echo form_checkbox($data); ?>

	<?php echo form_label("Periodo de Matricula Ativo ?"); ?>
	<?php		
		$data = array(
			'name' => 'periodo_matricula',			
			'id' => 'periodo_matricula',
			'checked' => 'checked'
		);

		if ($row->periodo_matricula != 1) {
			$data['checked'] = null;
		}
	?>
	<?php echo form_checkbox($data); ?>
</p> 

<p>
	<?php echo form_label("Código da instituição:"); ?>
	<?php
		$data = array(
			'name' => 'cliente_id',
			'id' => 'cliente_id',
			'value' => $row->cliente_id,
			'placeholder' => 'Insira o codigo da instituição'
		);
	?>
	<?php $dataid = $row->id?>
	<?php echo form_input($data, $dataid); ?>
</p> 

<p>
	<?php
		$data = array(
			'name' => 'Enviar',
			'value' => 'Atualizar',
			'class' => 'right'
		);
	?>
	<?php echo form_submit($data); ?>
</p> 
<?php echo form_close(); ?>
</body>
</html>