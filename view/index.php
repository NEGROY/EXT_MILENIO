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
  <div class="container" id="frame">
    <h1>ORDEN DE COMPRA</h1>
    <div class="card crdbody">
    <div class="card-header text-info"> <h4>Documento</h4>  </div>
    <div class="card-body">

      <div class="row crdbody">
        <div class="col-md-2"> <div class="input-group">
          <span class="input-group-text">Orden</span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div> </div>

        <div class="col-md-3"> <div class="input-group">
          <span class="input-group-text"> fecha </span>
          <input type="date" class="form-control" id="NombreGrupo"  required>
        </div> </div>

        <div class="col-md-4"> <div class="input-group">
          <span class="input-group-text"> tipo </span>
          <input type="date" class="form-control" id="NombreGrupo"  required>
        </div> </div>

      </div>

      <div class="row crdbody">
        <div class="col-md-3"> <div class="input-group">
          <span class="input-group-text">Proveedor</span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div> </div>

        <div class="col-md-4"> <div class="input-group">
          <span class="input-group-text">  </span>
          <input type="text" class="form-control" id="NombreGrupo" required>
        </div> </div>

        <div class="col-md-4"> <div class="input-group">
          <span class="input-group-text"> NT  </span>
          <input type="text" class="form-control" id="NombreGrupo" required>
        </div> </div>

      </div>

    </div>
    </div> <!-- Ingreso de Caja FINAL -->

    
    <div class="card crdbody">
    <div class="card-header text-info"> <h4>Variable de Control</h4>  </div>
    <div class="card-body">
      
      <div class="row crdbody">
        <div class="col-md-5"> <div class="input-group">
          <span class="input-group-text">Autoriza</span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div> </div>

        <div class="col-md-3"> <div class="input-group">
          <span class="input-group-text"> Caja Chica </span>
          <input type="checkbox" class="form-control" id="NombreGrupo"  required>
        </div> </div>

        <div class="col-md-4"> <div class="input-group">
          <span class="input-group-text"> Combustible </span>
          <input type="checkbox" class="form-control" id="NombreGrupo"  required>
        </div> </div>

      </div>

      <div class="row crdbody">
        <div class="col-md-3"> <div class="input-group">
          <span class="input-group-text">Forma de Pago</span>
          <input type="checkbox" class="form-control" id="CodigoGrupo"  readonly>
          <input type="checkbox" class="form-control" id="CodigoGrupo"  readonly>
        </div> </div>

        <div class="col-md-4"> <div class="input-group">
          <span class="input-group-text"> Moneda  </span>
          <input type="checkbox" class="form-control" id="CodigoGrupo"  readonly>
          <span class="input-group-text"> Moneda  </span>
          <input type="checkbox" class="form-control" id="CodigoGrupo"  readonly>
        </div> </div>

        <input type="checkbox" class="form-control" id="CodigoGrupo"  readonly>
      </div>

      <div class="row crdbody">
        <div class="col-md-3"> <div class="input-group">
          <span class="input-group-text"> Contraseña </span>
          <input type="password" class="form-control" id="CodigoGrupo"  readonly>
        </div> </div>
        <div class="col-md-3"> <div class="input-group">
          <span class="input-group-text"> Factura </span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div> </div>
      </div>

    </div> </div> <!-- Ingreso de Caja FINAL -->

    <div class="card crdbody">
    <div class="card-header text-info"> <h4>Variable de Control</h4>  </div>
    <div class="card-body">
      
      <div class="row crdbody">
        <div class="col-1"> 
          <span class="input-group-text"> Línea </span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div>  

        <div class="col-2">  
          <span class="input-group-text"> Cantidad </span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div>  

        <div class="col-1">  
          <span class="input-group-text"> Unidad </span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div>  

        <div class="col-3">  
          <span class="input-group-text"> Descripión </span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div>

        <div class="col-2"> 
          <span class="input-group-text"> Precio Unitario </span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div>  

        <div class="col-1"> 
          <span class="input-group-text"> IVA </span>
          <input type="text" class="form-control" id="CodigoGrupo"  readonly>
        </div> 

        <div class="col-2">  
          <span class="input-group-text"> ENTREGA </span>
          <input type="date" class="form-control" id="CodigoGrupo"  readonly>
        </div>  
      </div>

      <div class="row crdbody">
        <table>
          <thead>
            <th> 1 </th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
          </thead>
          <tbody>
            <th> 1ah </th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
          </tbody>
        </table>
      </div>
    </div> </div> <!-- Ingreso de Caja FINAL -->
  </div>
</body>

</html>