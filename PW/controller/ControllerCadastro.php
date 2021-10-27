<?php
    require_once("../model/cadastro.php");
    class cadastroCotroller{
        private $cadastro;

        public function __construct(){
            $this->cadastro = new Cadastro();
            $this->incluir();
        }

        private function incluir(){
            $this->cadastro->setNome($_POST['txtNome']);
            $this->cadastro->setTelefone($_POST['txtTelefone']);
            $this->cadastro->setOrigem($_POST['txtOrigem']);
            $this->cadastro->setData(date('Y-m-d', strtotime($_POST['txtData'])));
            $this->cadastro->setObs($_POST['txtObs']);
            $result = $this->cadastro->incluir();

            if($result >= 1){
                echo "<script>alert('Registro incluído com sucesso!'); document.location='../index.php'</script>";
            }else{
                echo "<script>alert('Erro ai gravar registro!')</script>";
            }
        }
    }

    new cadastroCotroller();

?>