<?php

require_once("model/Pessoa.php");

function ProcessoPessoa($Processo) {

    switch ($Processo) {

        case 'incluir':

            global $linha;
            global $rs;

            $pessoa = new Pessoa();

          /*  $pessoa->consultar("select * from pessoa");
            $linha = $pessoa->Linha;
            $rs = $pessoa->Result;*/

            $_POST['dataNascimento'] = date($_POST['dataNascimento']);

            $_POST['dataNascimento'] = explode("/", $_POST['dataNascimento']);

            list($dia, $mes, $ano) = $_POST['dataNascimento'];

            $_POST['dataNascimento'] = "$ano-$mes-$dia";


            if (isset($_POST['ok']) == 'true') {
                $pessoa->incluirPessoa($_POST['nome'], $_POST['email'], $_POST['dataNascimento'],
                    $_POST['cpf'], $_POST['rg'], $_POST['orgaoExpedidor'],  $_POST['telefoneFixo'], $_POST['telefoneCelular'],
                    $_POST['sexo'], $_POST['planoSaude'], $_POST['alergia'], $_POST['tipoSanguineo'], $_POST['endereco']);


                $pessoa->incluirParticipante($_POST['matricula'], $_POST['fkCurso'], $_POST['turno'],$_POST['periodo'],
                    $_POST['cpf'],$_POST['matriculaC'],$_POST['cargo'],$_POST['instituicao']);

                echo '<script>alert("Cadastrado com sucesso !");</script>';
                echo '<script>window.location="index.php";</script>';
            }

            break;

        case 'consultar':

            global $linha;
            global $rs;

            $pessoa = new Pessoa();

            $pessoa->consultar("select * from pessoa");
            $linha = $pessoa->Linha;
            $rs = $pessoa->Result;

            if (isset($_GET['ok']) == "excluir") {
                $pessoa->excluir($_GET['idUsuario']);
                echo '<script>alert("Excluido com sucesso !");</script>';
                echo '<script>window.location="lista_participante.php";</script>';
            }

            break;


        case 'editar':

            global $linha;
            global $rs;

            $pessoa = new Pessoa();

            $pessoa->consultar("select * from pessoa where idUsuario=" . $_GET['idUsuario']);
            $linha = $pessoa->Linha;
            $rs = $pessoa->Result;

            $_POST['dataNascimento'] = date($_POST['dataNascimento']);

            $_POST['dataNascimento'] = explode("-", $_POST['dataNascimento']);

            list($dia, $mes, $ano) = $_POST['dataNascimento'];

            $_POST['dataNascimento'] = "$dia/$mes/$ano";

            if (isset($_POST['ok']) == "true") {
                $pessoa->alterar($_POST['nome'], $_POST['email'], $_POST['dataNascimento'], $_POST['cpf'], $_POST['rg'], $_POST['orgaoExpedidor'], $_POST['telefoneFixo'], $_POST['telefoneCelular'], $_POST['sexo'], $_POST['planoSaude'], $_POST['alergia'], $_POST['tipoSanguineo'], $_POST['endereco'], $_GET['idUsuario']);
                echo '<script>alert("Alterado com sucesso !");</script>';
                echo '<script>window.location="lista_participante.php";</script>';
            }

            break;
    }
}
