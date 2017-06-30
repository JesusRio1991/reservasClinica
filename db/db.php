<?php

	/*
	 * ***** Archivo de clase de base de datos ******
	 */

	/*
	 * CLASE PRINCIPAL DE LA BASE DE DATOS
	 */

	class DB {

		// BD de la aplicaci�n
		private $db;

		/*
			Constructor de la clase. Conecta con la base de datos.
		*/
		function __construct() {
			// Conexi�n con la base de datos
			$host_name  = "localhost";
			$database   = "clinica";
			$user_name  = "root";
			$password   = "toor";

			try {
				$this->db = new mysqli($host_name, $user_name, $password, $database);
				/* change character set to utf8 */
				if (!$this->db->set_charset("utf8")) {
					printf("Error loading character set utf8: %s\n", $this->db->error);
				}
			} catch (Exception $e ) {
				echo "No se ha podido conectar con la base de datos";
				echo "message: ".$e->getMessage();
				exit;
			}


		}

		public function getCitasByFecha($fecha)
		{
			$consulta = "SELECT fecha, duracion FROM citas WHERE fecha >= '".$fecha." 09:30:00' AND fecha <= '".$fecha." 20:30:00' ORDER BY fecha ASC";
			$ejecucion	= $this->db->query($consulta);

			if($ejecucion->num_rows > 0) {
				return $ejecucion;
			} else {
				return false;
			}
		}
	}

