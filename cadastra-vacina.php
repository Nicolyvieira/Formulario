<?php
    $Nome = $_POST['txtNome'];
    $CPF = $_POST['txtCPF'];
    $DataDeNascimento = $_POST['txtData'];
    $Dose = $_POST['ckDose'];
    $sede = $_POST['slSes'];

    switch($sede){
        case 1:
            $categoria = "Colégio Eduki";
            break;
        case 2: 
            $categoria = "Colégio Nef";
            break;
        case 3:
            $categoria = "Colégio Suller Garcia";
            break;
        case 4:
            $categoria = "Colégio Dom Felipe";
            break;
        case 5:
            $categoria = "Colégio Mukai";
            break;
    }

    echo("O professor ".$Nome." da Escola ".$categoria." foi cadastrado com sucesso");
    
?>