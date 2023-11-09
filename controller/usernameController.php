<?php
    class bebidaController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new bebidaModel();
        }
        public function guardar($marca,$modelo,$anio,$color,$tipo,$cilindros,$precio){
            $id = $this->model->insertar($marca,$modelo,$anio,$color,$tipo,$cilindros,$precio);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $marca, $modelo,$anio,$color,$tipo,$cilindros,$precio){
            return ($this->model->update($id, $marca, $modelo,$anio,$color,$tipo,$cilindros,$precio) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>