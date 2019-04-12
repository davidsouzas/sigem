<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<link href="<?php echo base_url('css/estilo.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
	<h2>Lista</h2>	
	<table class="table_listar" border="1" cellpadding="10">
		<tr>
			<th>Nome</th>
			<th>Data de Inicio</th>
			<th>Data de Término</th>
			<th>Periodo Letivo</th>
			<th>Periodo de Matricula</th>
			<th>Cliente</th>
			<th></th>
		</tr>

		
			<?php foreach($linhas as $campo) {
				$periodo_letivo;
				$periodo_matricula;
				$cliente;
			//	var_dump($campo['cliente_id']);
				if($campo['periodo_letivo_encerrado'] == 1){
					$periodo_letivo = "Ano Letivo Encerrado";
				}else{
					$periodo_letivo = "Ano Letivo em Curso";
				}

				if($campo['periodo_matricula'] == 1){
					$periodo_matricula = "Prazo de Matricula em Curso";
				}else{
					$periodo_matricula = "Matriculas Encerradas";
				}

				if($campo['cliente_id'] == 800){
					$cliente = "Escola Clariosvaldo";
				}else if($campo['cliente_id'] == 1212){
					$cliente = "Escola Pedrioncio";
				}else if($campo['cliente_id'] == 555){
					$cliente = "Escola Durustino";
				}
				?>
				<tr>
					<td><?= $campo['nome'] ?></td>
					<td><?= $campo['data_inicio'] ?></td>
					<td><?= $campo['data_termino'] ?></td>
					<td><?=$periodo_letivo?></td>
					<td><?=$periodo_matricula?></td>
					<td><?=$cliente?></td>
					<td><a href="delete/?id=<?= $campo['id']?>">Excluir</a></td>
				<tr>
			<?php } ?>
		<tr>
	</table>

</body>
</html>