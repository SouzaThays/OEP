<?php

require_once("model/Projeto.php");

function Projeto($Processo) {

    switch ($Processo) {

        case 'incluir':

            global $linha;
            global $rs;

            $usuario = new Projeto();

            $usuario->consultar("select * from projeto");
            $linha = $usuario->Linha;
            $rs = $usuario->Result;


            // ----- cONVERTER DATA COM "/" PARA "-" ----- //
                $_POST['dataInicio'] = date($_POST['dataInicio']);

                $_POST['dataInicio'] = explode("/", $_POST['dataInicio']);

                list($dia, $mes, $ano) = $_POST['dataInicio'];

                $_POST['dataInicio'] = "$ano-$mes-$dia";


                $_POST['dataFim'] = date($_POST['dataFim']);

                $_POST['dataFim'] = explode("/", $_POST['dataFim']);

                list($dia, $mes, $ano) = $_POST['dataFim'];

                $_POST['dataFim'] = "$ano-$mes-$dia";



                $_POST['dataAtual'] = date($_POST['dataAtual']);

                $_POST['dataAtual'] = explode("/", $_POST['dataAtual']);

                list($dia, $mes, $ano) = $_POST['dataAtual'];

                $_POST['dataAtual'] = "$ano-$mes-$dia";



            if (isset($_POST['ok']) == 'true') {
               /* if($_POST['dataInicio'] < $_POST['dataAtual']){
                    echo '<script>alert("Data Inicial é menor que a data atual !");</script>';
                }
                elseif($_POST['dataInicio'] > $_POST['dataFim']){
                    echo '<script>alert("Data inicial é maior que a data Final !");</script>';
                }
                else{ */
                    $usuario->incluir($_POST['nome'],$_POST['dataInicio'], $_POST['dataFim'], $_POST['informacao'],
                        $_POST['assessoria'], $_POST['responsavel'], $_POST['numVagas'], $_POST['valorTaxa'],
                        $_POST['certifPC'],$_POST['certifHC'], $_POST['local'], $_POST['fkprograma'],  $_POST['fkPlanejamento']);


                    echo '<script>alert("Cadastrado com sucesso !");</script>';
                    echo '<script>window.location="index.php";</script>';
           /*     } */
            }

            break;

        case 'consultar':

            global $linha;
            global $rs;

            $usuario = new Projeto();

            $usuario->consultar("select * from projeto");

            $linha = $usuario->Linha;
            $rs = $usuario->Result;

            if (isset($_GET['ok']) == "excluir") {
                $usuario->excluir($_GET['idProjeto']);
                echo '<script>alert("Excluido com sucesso !");</script>';
                echo '<script>window.location="lista_projeto.php";</script>';
            }

            break;


        case 'editar':

            global $linha;
            global $rs;

            $usuario = new Projeto();

            $usuario->consultar("select * from projeto where idProjeto=" . $_GET['idProjeto']);

            $linha = $usuario->Linha;
            $rs = $usuario->Result;

            if (isset($_POST['ok']) == "true") {
                $usuario->alterar($_POST['nome'], $_POST['dataInicio'] , $_POST['dataFim'], $_POST['informacao'], $_POST['assessoria'], $_POST['responsavel'], $_POST['numVagas'], $_POST['valorTaxa'], $_POST['local'], $_GET['idProjeto'] );
                echo '<script>alert("Alterado com sucesso !");</script>';
                echo '<script>window.location="lista_projeto.php";</script>';
            }

            break;

        case 'listar_ultimos':
            global $linha;
            global $rs;

            $usuario = new Projeto();

            $usuario->consultar("select * from projeto ORDER BY idProjeto DESC LIMIT 3");
            $linha = $usuario->Linha;
            $rs = $usuario->Result;

            if (isset($_GET['ok']) == "excluir") {
                $usuario->excluir($_GET['idProjeto']);
                echo '<script>alert("Excluido com sucesso !");</script>';
                echo '<script>window.location="lista_projeto.php";</script>';
            }
            break;
    }
}
