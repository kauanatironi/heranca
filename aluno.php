<?php

require_once 'pessoa.php';

class aluno extends pessoa {
    private $matricula;
    private $curso;
    
    function cancelarMatricula(){
        echo"<br>cancelaremos sua matrícula! ";
    }
    
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


}
