<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <title>Lista de Tarefas</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="?page=listar">Lista de Tarefas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
          case "nova":
          include("nova-tarefa.php");
          break;
          case "listar":
          include("listar-tarefas.php");
          break;
          case "salvar":
          include("salvar-tarefa.php");
          break;
          case "editar":
          include("editar-tarefa.php");
          break;  
        }
        ?>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>