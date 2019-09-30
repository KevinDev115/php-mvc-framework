<?php 

class DataBase 
{
	#Variables para preparar consultas.
	public $dbh; 
	private $stmt;
	private $error;


	/**
	 * @author: KevinG
	 * @desc: Valida que tipo de conexion se realizara.
	 **/
 	function __construct($db = null)
	{
        $connection = empty($db) ? DB_PRIORITY_CONNECTION : $db;

        switch ($connection) {
            case 'ORA':
                $this->connect_ora();
            break;
            
            case 'MYSQL':
                $this->connect_mysql();
            break;
            

            default:
                # code...
            break;
        }

    }
    
    public function connect_mysql()
    {
        $dsn = 'mysql:host='.DB_HOST_MYSQL.';dbname='.DB_NAME_MYSQL.';charset=utf8';
        $options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_EMULATE_PREPARES => false,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
		];
        try {
			#Se realiza la conexion a la base
			$this->dbh = new PDO($dsn, DB_USER_MYSQL, DB_PASSWORD_MYSQL, $options);
		} catch (PDOException $e) {
			#En caso de generar un error detendra el proceso y se notificara el error.
			$this->error = $e->getMessage();
			die($this->error);
		}
    }

	public function connect_sqlite()
	{
		$dbs = 'sqlite:'.DB_PATH_SQLITE;
		$options = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		];

		try {
			$this->dbh = new PDO($dbs,"","",$options);			
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			die($this->error);
		}
	}

	public function connect_ora()
	{
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_EMULATE_PREPARES => false,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
		];
		$dbtns = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = '.DB_HOST_ORA.')(PORT = '.DB_PORT_ORA.')) (CONNECT_DATA = (SERVICE_NAME = '.DB_SERVICE_NAME_ORA.') (SID = '.DB_SID_ORA.')))';
		
		try {
			$this->dbh = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", DB_USER_ORA, DB_PASSWORD_ORA, $options);
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			die($this->error);
		}
	}


	#-----------------------------------#
	# 		FUNCIONES DE CONSULTA		#
	#-----------------------------------#

	/**
	 * @author: KevinG
	 * @param: string $sql
	 * @desc: Realiza la preparacion de la consulta que se le pase como parametro para revisar posibles erres de syntaxis
	 **/
	public function query($sql)
	{
		#Se guarda la consulta en la variable "$stmt" del controlador.
		$this->stmt = $this->dbh->prepare($sql);
	}

	/**
	 * @author: KevinG
	 * @param: integer $param, string $val, instance PDO $type, integer $lrg
	 * @desc: Encargado de pasar los parametros a la consulta para evitar inxeccion SQL
	 **/
	public function bind($param, $val, $type = null, $lrg = null)
	{
		#Se valida que la variable $type no llegue vacia.
		if (is_null($type)) {

			#Se comprueba el tipo de valor que es la variable $val parapoder pasarle el parametro correspondiente.
			switch (true) {
				case is_int($val):
					$type = PDO::PARAM_INT;
				break;
				
				case is_bool($val):
					$type = PDO::PARAM_BOOL;
				break;
				
				case is_null($val):
					$type = PDO::PARAM_NULL;
				break;
				
				default:
					$type = PDO::PARAM_STR;
				break;
			}
		}

		#Se argrega el parametro a la consulta.
		$this->stmt->bindParam($param, $val, $type, $lrg);
	}

	/**
	 * @author: KevinG
	 * @desc: Encargado de ejecutar la consulta (solo ejecuta la consulta)
	 * @return boolean $this->stmt
	 **/
	public function execute()
	{
		#Ejecuta y retorna la respuesta de la ejecucion
		return $this->stmt->execute();
	}

	/**
	 * @author: KevinG
	 * @desc: Encargado de ejecutar la consulta (retorna solo un registro)
	 * @return boolean $this->stmt
	 **/
	public function getOne()
	{
		#Ejecuta la consulta.
		$this->execute();
		#Retorna el registro encontrado.
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}

	/**
	 * @author: KevinG
	 * @desc: Encargado de ejecutar la consulta (retorna todos los registros)
	 * @return boolean $this->stmt
	 **/
	public function getAll()
	{
		#Ejecuta la consulta.
		$this->execute();
		#Retorna todos los registros.
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

}