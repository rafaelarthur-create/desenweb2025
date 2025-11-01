<?php

    class Pessoa {
        private $nome;
        private $sobreNome;
        private $dataNascimento;
        private $cpfcnpj;
        private $tipo;
        private $telefone;
        private $endereco;

        private function __construct() {
            $this->inicializaClasse();
        }

        private function inicializaClasse() {
            $this->tipo = 1;
        }

        public function descricaoTipo() {
            switch ($this->tipo) {
                case 1:
                    return "Fisico";
                case 2:
                    return "Jurídico";
                case 3:
                    return "Desconhecido";
            }    
        }

        public function getNomeCompleto() {
            return $this->nome . " " . $this->sobreNome;
        }

        public function getIdade() {
            $dataAtual = new DateTime();
            $idade = $dataAtual->diff($this->dataNascimento);
            return $idade->y;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            return $this->nome = $nome;
        }

        public function getSobreNome() {
            return $this->sobreNome;
        }

        public function setSobreNome($sobreNome) {
            return $this->sobreNome = $sobreNome;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento) {
            return $this->dataNascimento = $dataNascimento;
        }

        public function getCpfCnpj() {
            return $this->cpfcnpj;
        }

        public function setCpfCnpj($cpfcnpj) {
            return $this->cpfcnpj = $cpfcnpj;
        }

        public function getTipo() {
            return $this->tipo;
        } 

        public function setTipo($tipo) {
            if ($tipo < 1 || $tipo > 2) {
                return new Exception("Tipo inválido.") 
            } $this->tipo = $tipo;
        }

    }

?>