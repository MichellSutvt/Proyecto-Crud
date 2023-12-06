<?php

include("../../conexion.php");


if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion->prepare("SELECT * FROM contactos WHERE id=:txtid");
    $stm->binParam(":txtid");
    $registro=$stm->fetch(PDO::FETCH_LAZY);
$nombre=$registro['nombre'];
$telefono=$registro['telefono'];
$fecha=$registro['fecha'];


    }





?>

<?php include("../../template/header.php"); ?>










<form action="" method="post">
      <div class="modal-body">
      <
        <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>"placeholder="Ingresa nombre">

        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>"placeholder="Ingresa nombre">

        <label for="">Telefono</label>
        <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>"placeholder="Ingresa telefono">

        <label for="">Fecha</label>
        <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>">
    </div>

      <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">calcelar</a>
        <button type="submit" class="btn btn-primary">Actializar</button>
        </div>
    </form>

    <?php include("../../template/footer.php"); ?>