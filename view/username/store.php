<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new bebidaController();
    $obj->guardar($_POST['marca'],$_POST['modelo'],$_POST['anio'],$_POST['color'],$_POST['tipo'],$_POST['cilindros'],$_POST['precio']);
?>