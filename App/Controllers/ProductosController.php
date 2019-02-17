<?php 
if(file_exists('../Models/ConexionModels.php'))
require_once('../Models/ConexionModels.php');
if(file_exists('../Models/ProductosModels.php'))
require_once('../Models/ProductosModels.php');
class ProductosController{

    public $conexion;
    public function __construct($conexion){
       $this->conexion=$conexion;
    }

    public function Index(){
        $consulta= $this->conexion->prepare("SELECT id, nombre FROM tbl_consolas");
        $consulta->execute();
        $consulta = $consulta->fetchAll(\PDO::FETCH_OBJ);
        session_start();
        $consulta=$consulta; 
        $_SESSION['consulta'] = $consulta; 
        header('Location:../Views/Buscador.php');
    }

    public function read(){
        $titulo = $_POST['titulo'];
        $consola  = $_POST['consola'];
        $ex2 = $_POST['ex2'];
        $ex2 = explode(",", $ex2);
        $rango1 = $ex2[0]; 
        $rango2 = $ex2[1]; 
        $consulta =$this->conexion->prepare("SELECT titulo, consola, precio from tbl_juegos INNER JOIN tbl_consolas ON tbl_juegos.consola = tbl_consolas.id where precio between $rango1 and $rango2 and titulo like '%$titulo%' and consola = $consola;");
        $consulta->execute();
        $consulta= $consulta->fetchAll(\PDO::FETCH_ASSOC);
        echo json_encode($consulta);
        }
    }
?>