<?php
class venta
{
	private $pdo;
    
    public $idcomic;
    public $nomcomic;
    public $proveedor;
    public $editorial;
    public $tipo;
    public $costo;
	public $inclusiones;
	public $img;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM venta");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idcomic)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM venta WHERE idcomic = ?");
			          

			$stm->execute(array($idcomic));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcomic)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM venta WHERE idcomic = ?");			          

			$stm->execute(array($idcomic));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE venta SET 
						nomcomic          = ?, 
						proveedor        = ?,
                        editorial        = ?,
						tipo            = ?, 
						costo = ?,
						inclusiones=?,
						img=?
				    WHERE idcomic = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nomcomic, 
                        $data->proveedor,
                        $data->editorial,
                        $data->tipo,
                        $data->costo,
						$data->inclusiones,
						$data->img,
                        $data->idcomic
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `venta` (nomcomic,proveedor,editorial,tipo,costo,inclusiones,img) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nomcomic, 
                    $data->proveedor,
                    $data->editorial,
                    $data->tipo,
                    $data->costo,
					$data->inclusiones,
					$data->img                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
