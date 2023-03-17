<?php require_once '../include/incl.php';
//  http://localhost/dashboard/PROYECTOS/PRUBAS/mil/view/
include_once './ventana.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primera Vista</title>

  <link rel="stylesheet" href="../include/css/style.css">

</head>

<body class="dark">
  <?php require '../include/menu/menu1.php'; ?>
  <br>
  <div class="container">
    <h1>ORDEN DE COMPRA</h1>
    <div class="card crdbody">
      <div class="card-header text-info"> <h4>Documento</h4>  </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-control">
              <input id="orden" type="number">
              <label for="orden">Orden</label>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-control">
              <input type="date" id="fecha">
              <label for="fecha">Fecha</label>
            </div>
          </div>
        </div>

        <div class="row crdbody">

<div class="col-md-5"> <div class="input-group">
  <span class="input-group-text">Codigo de grupo</span>
  <input type="text" class="form-control" id="CodigoGrupo" placeholder="Código de grupo" readonly>
</div> </div>

<div class="col-md-7"> <div class="input-group">
  <span class="input-group-text">Nombre del Grupo Solidario</span>
  <input type="text" class="form-control" id="NombreGrupo" placeholder="Nombre Grupo" required>
</div> </div>
</div>
      </div>
    </div> <!-- Ingreso de Caja FINAL -->

  </div>
</body>

</html>