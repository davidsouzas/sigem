<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIGEM</title>
	<link href="<?php echo base_url('css/estilo.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
<h2>Bem vindo</h2>

<?php
	$attributes = array('class' => 'form_home', 'style' => "border: 1px solid black" );
	echo form_open('Home/save', $attributes);
?>
<p>
	<?php echo form_label("Nome:"); ?>
	<?php
		$data = array(
			'name' => 'nome',
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
			'name' => 'preriodo_letivo_encerrado',
			'id' => 'preriodo_letivo_encerrado',
			'value' => '1'
			//'checked' => '0'
		);
	?>
	<?php echo form_checkbox($data); ?>

	<?php echo form_label("Periodo de Matricula Ativo ?"); ?>
	<?php
		$data = array(
			'name' => 'periodo_matricula',
			'id' => 'periodo_matricula',
			'value' => '1'
			//'checked' => '0'
		);
	?>
	<?php echo form_checkbox($data); ?>
</p> 

<p>
	<?php echo form_label("Código da instituição:"); ?>
	<?php
		$data = array(
			'name' => 'cliente_id',
			'id' => 'cliente_id',
			'placeholder' => 'Insira o codigo da instituição'
		);
	?>
	<?php echo form_input($data); ?>
</p> 

<p>
	<?php
		$data = array(
			'name' => 'Enviar',
			'value' => 'Gravar',
			'class' => 'right'
		);
	?>
	<?php echo form_submit($data); ?>
</p> 
<?php echo form_close(); ?>

<!--
<div>
	<?php foreach ($linhas as $campo) {?>
		<?= $campo['Nome']?>
	<?php } ?>
</div>

<div>
	<form action="Home/save" method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome">
	</br>
		<label for="nome">Data de Início:</label>
		<input type="date" name="data_inicio" id="data_inicio">
	</br>
		<label for="nome">Data de Término:</label>
		<input type="date" name="data_termino" id="data_termino">
	</br>
		<label for="nome">Periodo Letivo Encerrado ?</label>
		<input type="radio" name="preriodo_letivo_encerrado" id="preriodo_letivo_encerrado">
	</br>
		<label for="nome">Periodo de Matricula Ativo ?</label>
		<input type="radio" name="periodo_matricula" id="periodo_matricula">
	</br>
		<label for="nome">Código da instituição:</label>
		<input type="text" name="cliente_id" id="cliente_id">
	</br>
		<input type="submit" value="Gravar">
	</form> 
</div> -->
</body>
</html>