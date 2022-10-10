<h1>Adicionar Tarefa</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome da Tarefa</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Custo (R$)</label>
		<input type="double" name="custo" class="form-control">

	</div>
	<div class="mb-3">
		<label>Data Limite</label>
		<input type="date" name="data" class="form-control">
	</div>
	
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>