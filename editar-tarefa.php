<h1>Editar Tarefa</h1>
<?php
$sql = "SELECT * FROM tarefas WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3"> 
		<label>Nome da Tarefa</label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Custo (R$)</label>
		<input type="double" name="custo" value="<?php print $row->custo; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data Limite</label>
		<input type="date" name="data" value="<?php print $row->data; ?>" class="form-control">
	</div>
	
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>