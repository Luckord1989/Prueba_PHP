<?php
    class conexion{
        //Declaracion de las variables de conexion
        protected static $host = "localhost";
        protected static $usuario = "root";
        protected static $password = "";
        protected static $base_datos = "Pruebadb";
        protected static $mysqli_con;
        public static $resultados;

        //Metodos
        //Conexion con la base de datos
        public function conexion(){
            try {
                //Ejecutamos la conexion a la base de datos
                $this -> mysqli_con = new mysqli (
                    $this -> host,
                    $this -> usuario,
                    $this -> password,
                    $this -> base_datos);
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
                    $this -> mysqli_con,
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