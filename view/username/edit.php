<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new bebidaController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Marca</label>
        <div class="col-sm-10">
            <input type="text" name="marca" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Modelo</label>
        <div class="col-sm-10">
            <input type="text" name="modelo" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Año</label>
        <div class="col-sm-10">
            <input type="text" name="anio" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Color</label>
        <div class="col-sm-10">
            <input type="text" name="color" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-10">
            <input type="text" name="tipo" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Cilindros</label>
        <div class="col-sm-10">
            <input type="number" name="cilindros" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="text" name="precio" class="form-control" id="inputPassword" value="<?= $user[7]?>">
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>