<?php
    class ValidadorRegistro{

        //ERROR CON BOOSTRAP
        private $aviso_inicio;
        private $aviso_cierre;

        private $nombre;
        private $email;
        private $clave;

        private $error_nombre;
        private $error_email;
        private $error_clave1;
        private $error_clave2;




        public function __construct($nombre,$email,$clave1,$clave2){

           $this -> aviso_inicio =  "<br><div class='alert alert-danger' role='alert'>" ;
           $this -> aviso_cierre = "</div>";

            $this -> nombre = "";
            $this -> email = "";
            $this -> clave = "";

            $this -> error_nombre = $this -> validar_nombre($nombre);
            $this -> error_email = $this -> validar_email($email);
            $this -> error_clave1 = $this -> validar_clave1($clave1);
            $this -> error_clave2 = $this -> validar_clave2($clave1,$clave2);

            if($this -> error_clave1 === "" & $this -> error_clave2 === ""){
                $this -> clave = $clave1;
            }
        }

        private function variable_iniciada($variable){
            if(isset($variable) && !empty($variable)){
                return true;
            }else{
                return false;
            }
        }

        private function validar_nombre($nombre){
            if(!$this -> variable_iniciada($nombre)){
                return "Debes escribir un nombre de usuario.";
            }else{
                $this -> nombre = $nombre;
            }

            //strlen --> tamaño de la cadena

            if(strlen($nombre) < 6){
                return "El nombre es muy corto";
            }

            if(strlen($nombre) > 24){
                return "El nombre es muy largo";
            }

            return "";
        }


        private function validar_email($email){
            if(!$this -> variable_iniciada($email)){
                return "Debes ingresar email";
            }else{
                $this -> email = $email;
            }

            return "";
        }

        private function validar_clave1($clave1){
            if(!$this -> variable_iniciada($clave1)){
                return "Debes ingresar una contraseña";
            } 

            return "";
        }

        private function validar_clave2($clave1,$clave2){

            if(!$this -> variable_iniciada($clave1)){
                return "Primero debes completar la contraseña.";
            }

            if(!$this -> variable_iniciada($clave2)){
                return "Debes repetir tu contraseña";
            } 
        
            if($clave1 !== $clave2){
                return "Ambas contraseñas deben coincidir.";
            }

            return "";
        }

        public  function obtener_nombre(){
            return $this -> nombre;
        }

        public function obtener_email(){
            return $this -> email;
        }

        public function obtener_clave(){
            return $this -> clave;
        }
        public function obtener_error_nombre(){
            return $this ->error_nombre; 
        }

        public function obtener_error_clave1(){
            return $this ->error_clave1;
        }

        public function obtener_error_clave2(){
            return $this ->error_clave2;
        }

        public function mostrar_nombre(){
           if($this -> nombre !== ""){
             echo 'value = "' . $this -> nombre . '"';
           }
        }

        public function mostrar_error_nombre(){
            if($this -> error_nombre !== ""){
                echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre;
            }
        }



        public function mostrar_email(){
            if($this -> email !== ""){
              echo 'value = "' . $this -> email . '"';
            }
         }

         public function mostrar_error_email(){
            if($this -> error_email !== ""){
                echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre;
            }
        }


        public function mostrar_error_clave1(){
            if($this -> error_clave1 !== ""){
                echo $this -> aviso_inicio . $this -> error_clave1 . $this -> aviso_cierre;
            }
        }

        public function mostrar_error_clave2(){
            if($this -> error_clave2 !== ""){
                echo $this -> aviso_inicio . $this -> error_clave2 . $this -> aviso_cierre;
            }
        }


        public function registro_valido(){
            if($this -> error_nombre === "" && $this -> error_email === "" &&
                $this -> error_clave1 === "" && $this -> error_clave2 === ""){
                    return true;
            }else{
                return false;
            }
        }

        
    }
?>