<h1>Tarefas</h1>
<?php
$sql = "SELECT * FROM tarefas";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd>0){
	print "<table class='table table-hover table-striped table-bordered'>";
	print "<tr>";
	print "<th>#id</th>";
	print "<th>Nome da Tarefa</th>";
	print "<th>Custo (R$)</th>";
	print "<th>Data Limite</th>";
	print "<th>Ações</th>";
	print "</tr>";
	while ($row = $res->fetch_object() ) {
		print "<tr>";
		print "<td>".$row->id."</td>";
		print "<td>".$row->nome."</td>";
		print "<td>".$row->custo."</td>";
		print "<td>".$row->data."</td>";
		print "<td>
		<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
		<button onclick=\"if(confirm('Tem certeza que deseja excluir essa tarefa?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
		</td>";
		print "</tr>";
	}
	print "</table>";
}else{
	print "<p class='alert alert danger'>Não foi encontrado nenhuma tarefa!</p>";
}

print "<button onclick=\"location.href='?page=nova';\" class='btn btn-success'>Incluir</button>";
?>