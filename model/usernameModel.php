<?php
    class bebidaModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($marca, $modelo, $anio, $color, $tipo, $cilindros, $precio){
            $stament = $this->PDO->prepare("INSERT INTO tbl_carro (marca, modelo, anio, color, tipo, cilindros, precio) VALUES (:marca, :modelo, :anio, :color, :tipo, :cilindros, :precio)");
            $stament->bindParam(":marca", $marca);
            $stament->bindParam(":modelo", $modelo);
            $stament->bindParam(":anio", $anio);
            $stament->bindParam(":color", $color);
            $stament->bindParam(":tipo", $tipo);
            $stament->bindParam(":cilindros", $cilindros);
            $stament->bindParam(":precio", $precio);
            
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_carro where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_carro");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $marca, $modelo,$anio,$color,$tipo,$cilindros,$precio){
            $stament = $this->PDO->prepare("UPDATE tbl_carro SET marca = :marca, modelo = :modelo, anio = :anio, color = :color, tipo = :tipo, cilindros = :cilindros, precio = :precio WHERE id = :id");
            $stament->bindParam(":marca",$marca);
            $stament->bindParam(":modelo",$modelo);
            $stament->bindParam(":anio",$anio);
            $stament->bindParam(":color",$color);
            $stament->bindParam(":tipo",$tipo);
            $stament->bindParam(":cilindros",$cilindros);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_carro WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>