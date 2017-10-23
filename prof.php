<?php

require_once 'pessoa.php';

class prof extends pessoa {
    private $especialidade;
    private $salario;
    
    function receberAumento($aumento){
        $this->salario += $aumento;
    }
    
    
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

 
}
