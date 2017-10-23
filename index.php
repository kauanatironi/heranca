
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once'pessoa.php';
        require_once 'aluno.php';
        require_once 'prof.php';
        require_once 'funcionario.php';
        
        $p1 = new pessoa();
        $p2 = new aluno();
        $p3 = new prof();
        $p4 = new funcionario();
        
        $p1->setNome("Fulano");
        $p2->setNome("Alucinado");
        $p3->setNome("Guanabara 2.0");
        $p4->setNome("Tia Limpeza");
        $p2->setCurso("Informatica");
        $p3->setSalario(17000);

        print_r($p4);
        print_r($p3);
        print_r($p2);
        print_r($p1);
        
        
        ?>
        </pre>
    </body>
</html>
