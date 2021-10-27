<?php

    //Definindo o tempo com base no local
    //date_default_timezone_get('America/Sao_Paulo');

    define('BD_SERVIDOR', 'localhost');
    define('BD_USUARIO', 'root');
    define('BD_SENHA', '');
    define('BD_BANCO', 'atvpw');
    
    class Banco{

        protected $mysqli;

        public function __construct(){
            $this->conexao();
        }

        private function conexao(){
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        }

        public function setAgendamentos($nome, $telefone, $origem, $data_contato, $obs){
            $stmt = $this->mysqli->prepare("INSERT INTO clientes (`nome`, `telefone`, `origem`, `data_contato`, `obs`) VALUES (?, ?, ?, ?, ?)");

            $stmt->bind_param("sssss", $nome, $telefone, $origem, $data_contato, $obs);

            if($stmt->execute() == TRUE){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }

?>