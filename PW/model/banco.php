<?php

    //Definindo o tempo com base no local
    //date_default_timezone_get('America/Sao_Paulo');

    define('BD_SERVIDOR', 'localhost');
    define('BD_USUARIO', 'root');
    define('BD_SENHA', '');
    define('BD_BANCO', 'atvpw');
    
    class Banco{

        protected $mysqli;
        private $Cadastro;
    
        public function __construct(){
            $this->conexao();
        }
    
        private function conexao(){
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        }
    
        public function setclientes($nome,$telefone,$origem,$data_contato,$obs){
            $stmt = $this->mysqli->prepare("INSERT INTO clientes (`nome`, `telefone`, `origem`, `data_contato`, `obs`) VALUES (?,?,?,?,?);");
            $stmt->bind_param("sssss",$nome,$telefone,$origem,$data_contato,$obs);
            if( $stmt->execute() == TRUE){
                return true ;
            }else{
                return false;
            }
        }
    
        public function getclientes($id) {
            try {
                if(isset($id) && $id > 0){
                    $stmt = $this->mysqli->query("SELECT * FROM clientes WHERE id = '" . $id . "';");
                }else{
                    $stmt = $this->mysqli->query("SELECT * FROM clientes;");
                }
                
                $lista = $stmt->fetch_all(MYSQLI_ASSOC);
                $f_lista = array();
                $i = 0;
                foreach ($lista as $l) {
                    $f_lista[$i]['id'] = $l['id'];
                    $f_lista[$i]['nome'] = $l['nome'];
                    $f_lista[$i]['telefone'] = $l['telefone'];
                    $f_lista[$i]['origem'] = $l['origem'];
                    $f_lista[$i]['data_contato'] = $l['data_contato'];
                    $f_lista[$i]['obs'] = $l['obs'];
                    $i++;
                }
                return $f_lista;
            } catch (Exception $e) {
                echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }
    
        public function updateclientes($id,$nome,$telefone,$origem,$data_contato,$obs){
           $stmt = $this->mysqli->query("UPDATE clientes SET `nome` = '" . $nome . "', `telefone` =  '" . $telefone . "', `origem` =  '" . $origem . "', `data_contato` =  '" . $data_contato . "', `obs` =   '" . $obs . "' WHERE `id` =  '" . $id . "';");
            if( $stmt > 0){
                return true ;
            }else{
                return false;
            }
        }

        public function deleteclientes($id){
            $stmt = $this->mysqli->query("DELETE FROM clientes WHERE `id` =  '" . $id . "';");
            if($stmt > 0){
                return true;
            }else{
                return false;
            }
        }
    }    
    ?>