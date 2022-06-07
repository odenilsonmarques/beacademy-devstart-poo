<pre>
    <?php
        ini_set('display_errors', 1);

        include 'Curso.php';
        include 'Professor.php';
        include 'Disciplina.php';

        $curso = new Curso();
        $curso->setNome('sistema de informação');
        $curso->setCargaHoraria(5000);
        $curso->setDescricao('formar profissionais para atuarem na area de tecnologia');
    

        $professor = new Professor();
        $professor->setNome('Mauro');
        $professor->setMatricula('1234SI');
        $professor->setSalario(7000);
        

        $disciplina = new Disciplina();
        $disciplina->setNome('Introdução ao PHP');
        $disciplina->setEmenta('algoritmo I, algoritmo II..');


        print_r($curso);
        print_r($disciplina);
        print_r($professor);
    ?>

</pre>