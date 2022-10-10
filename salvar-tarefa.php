<?php
switch ($_REQUEST["acao"]){
	case 'cadastrar':
	$nome = $_POST["nome"];
	$custo = $_POST["custo"];
	$data = $_POST["data"];

	$sql = "INSERT INTO tarefas (nome, custo, data) VALUES ('{$nome}', '{$custo}', '{$data}')";

	$res = $conn->query($sql);

	if($res==true){
		print "<script>alert('Cadastro realizado com sucesso!');</script>";
		print "<script>location.href='?page=listar';</script>";
	}else{
		print "<script>alert('Não foi possivel cadastrar!');</script>";
		print "<script>location.href='?page=listar';</script>";
	}
	break;
	case 'editar':
	$nome = $_POST["nome"];
	$custo = $_POST["custo"];
	$data = $_POST["data"];

	$sql = "UPDATE tarefas SET
	nome='{$nome}',
	custo='{$custo}',
	data='{$data}'
	WHERE
	id=".$_REQUEST["id"];

	$res = $conn->query($sql);

	if($res==true){
		print "<script>alert('Editado com sucesso!');</script>";
		print "<script>location.href='?page=listar';</script>";
	}else{
		print "<script>alert('Não foi possivel editar');</script>";
		print "<script>location.href='?page=listar';</script>";
	}
	break;
	case 'excluir':

	$sql = "DELETE FROM tarefas WHERE id=".$_REQUEST["id"];

	$res = $conn->query($sql);

	if($res==true){
		print "<script>alert('Excluído com sucesso!');</script>";
		print "<script>location.href='?page=listar';</script>";
	}else{
		print "<script>alert('Não foi possivel excluir');</script>";
		print "<script>location.href='?page=listar';</script>";
	}
	break;
}
?>