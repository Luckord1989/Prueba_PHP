<?php
    class conexion{
        //Declaracion de las variables de conexion
        private $host = "localhost";
        private $usuario = "root";
        private $password = "";
        private $base_datos = "Pruebadb";
        private $mysqli;

        //Metodos
        //Conexion con la base de datos
        public function conexion(){
            try {
                //Ejecutamos la conexion a la base de datos
                $this -> mysqli = new mysqli (
                    $this -> host,
                    $this -> usuario,
                    $this -> password,
                    $this -> base_datos) or die (
                        "No se pudo conectar a la base de datos"
                    );
                //Retornamos el valor verdadero
                return true;
            } catch (RuntimeException $th) {
                //En caso de error retornamos false
                return false;
            }            
        }
        //Autenticacion de usurio
        public function autenticacion_usuario($usuario_autenticacion, $password_autenticacion){
            try {
                //Consulta de datos
                $consulta = mysqli_query (
                    $this -> mysqli,
                    "CALL autenticacion_usuario($usuario_autenticacion,
                    $password_autenticacion)"
                );                
                return true;
            } catch (Exception $th) {
                //En caso de error retornamos false
                return false;
            }
        }
        //Metodo para consultas
        //Metodo para probar
    }
?>