<?php
require_once 'Model/venta.php';

class ventaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new venta();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/venta.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new venta();
        
        if(isset($_REQUEST['idcomic'])){
            $alm = $this->model->getting($_REQUEST['idcomic']);
        }
        
        require_once 'View/header.php';
        require_once 'View/venta-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new venta();
        
        $alm->idcomic = $_REQUEST['idcomic'];
        $alm->nomcomic = $_REQUEST['nomcomic'];
        $alm->proveedor = $_REQUEST['proveedor'];
        $alm->editorial = $_REQUEST['editorial'];
        $alm->tipo = $_REQUEST['tipo'];
        $alm->costo = $_REQUEST['costo'];
        $alm->inclusiones = $_REQUEST['inclusiones'];
        $alm->img = $_REQUEST['img'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idcomic > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcomic']);
        header('Location: index.php');
    }
}
