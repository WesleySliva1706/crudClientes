<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root\PW\model\cadastro.php");

class ControllerCadastro{

    private $Cadastro;

    public function __construct(){
        $this->Cadastro = new Cadastro();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
        }else if(isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['id']);
        }
    }

    private function incluir(){
        $this->Cadastro->setNome($_POST['txtNome']);
        $this->Cadastro->setTelefone($_POST['txtTelefone']);
        $this->Cadastro->setOrigem($_POST['txtOrigem']);
        $this->Cadastro->setData(date('Y-m-d',strtotime($_POST['txtData'])));
        $this->Cadastro->setobs($_POST['txtObs']);
        $result = $this->Cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }

    public function listar($id){
        return $result = $this->Cadastro->listar($id);
    }

    private function editar($id){
        $this->Cadastro->setId($id);
        $this->Cadastro->setNome($_POST['txtNome']);
        $this->Cadastro->setTelefone($_POST['txtTelefone']);
        $this->Cadastro->setOrigem($_POST['txtOrigem']);
        $this->Cadastro->setData(date('Y-m-d',strtotime($_POST['txtData'])));
        $this->Cadastro->setObs($_POST['txtObs']);
        $result = $this->Cadastro->editar();
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='../consClientes.php'</script>";
        }else{
            echo "<script>alert('Erro ao alterar o registro!');</script>";
        }
    }

    public function excluir($id){
        $result = $this->Cadastro->excluir($id);
        if($result >= 1){
            echo "<script>alert('Registro excluido com sucesso!');document.location='consClientes.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o registro!');</script>";
        }
    }
}
new ControllerCadastro();
?>