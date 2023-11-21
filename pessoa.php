<?php
    require "classePessoa.php";
    
    $pessoa1 = new Pessoa();

    $pessoa1->setNome("Gustavo");
    $pessoa1->setCpf(02786503094);
    $pessoa1->setIdade(21);
    $pessoa1->setSexo("Masculino");

    echo "Nome precisar ter no mínimo 3 caractéres: {$pessoa1->getvalidaNome()->nome}";
?>