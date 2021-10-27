<?php
    require_once("banco.php");

    class Cadastro extends Banco {
        private $nome;
        private $telefone;
        private $origem;
        private $data_contato;
        private $obs;

        //Set's
        public function setNome($string){
            $this->nome = $string;
        }

        public function setTelefone($string){
            $this->telefone = $string;
        }

        public function setOrigem($string){
            $this->origem = $string;
        }

        public function setData($string){
            $this->data_contato = $string;
        }

        public function setObs($string){
            $this->obs = $string;
        }

        //Get's
        public function getNome(){
            return $this->nome;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function getOrigem(){
            return $this->origem;
        }

        public function getData(){
            return $this->data_contato;
        }

        public function getObs(){
            return $this->obs;
        }

        public function incluir(){
            return $this->setAgendamentos($this->getNome(), $this->getTelefone(), $this->getOrigem(), $this->getData(), $this->getObs());
        }
    }

?>