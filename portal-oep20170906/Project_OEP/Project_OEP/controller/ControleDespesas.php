<?php

require_once("model/Despesas.php");  // ----- CARREGA A CLASSE USUARIO  ----- //

function ProcessoDespesas($Processo) {

    switch ($Processo) { // ----- A PARTIR DESTE PONTO TESTA O PROCESSO PASSADO PELA CAMADA DE VISÃO ----- //

        case 'incluir': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO INCLUIR USUARIO ----- //

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $despesas = new Despesas(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $despesas->consultar("select * from despesas"); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
            $linha = $despesas->Linha;
            $rs = $despesas->Result;

            $_POST['valor'] = $_POST['valor'];
            $_POST['valor'] = str_replace(",",".", $_POST['valor']);

            if (isset($_POST['ok']) == 'true') {
                $despesas->incluir($_POST['mnDespesas'],$_POST['valor'], $_POST['idProjeto']);
                echo '<script>alert("Cadastrado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="despesas.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;

        case 'consultar': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO CONSULTAR USUARIO ----- //

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $despesas = new Despesas(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $despesas->consultar("select d.*, p.* from despesas d, projeto p where p.idProjeto = d.idProjeto AND p.idProjeto=" . $_GET['idProjeto']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //s
            $linha = $despesas->Linha;
            $rs = $despesas->Result;

            if (isset($_GET['ok']) == "excluir") {
                $despesas->excluir($_GET['idDespesas']);
                echo '<script>alert("Excluido com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="despesas.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;

        case 'consultarProj': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO CONSULTAR USUARIO ----- //

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $despesas = new Despesas(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $despesas->consultar("select * from projeto where idProjeto=" . $_GET['idProjeto']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
            $linha = $despesas->Linha;
            $rs = $despesas->Result;

            if (isset($_GET['ok']) == "excluir") {
                $despesas->excluir($_GET['idDespesas']);
                echo '<script>alert("Excluido com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="despesas.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;
        case 'editar':

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $despesas = new Despesas(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $despesas->consultar("select * from despesas where idDespesas=" . $_GET['idDespesas']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS NESTE CASO UMA CONSULTA ESPECIFICA PARA O ID DE USUARIO VEJA O WHERE----- //
            $linha = $despesas->Linha;
            $rs = $despesas->Result;

            if (isset($_POST['ok']) == "true") {
                $despesas->alterar($_POST['mnDespesas'], $_POST['valor'], $_GET['idDespesas']);
                echo '<script>alert("Alterado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="despesas.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;


        case 'calcularDespesas':

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $despesas = new Despesas(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $despesas->consultar("select d.*, p.* from despesas d, projeto p where p.idProjeto = d.idProjeto AND p.idProjeto=" . $_GET['idProjeto']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
            $linha = $despesas->Linha;
            $rs = $despesas->Result;

            if (isset($_GET['ok']) == "excluir") {
                $despesas->excluir($_GET['idDespesas']);
                echo '<script>alert("Excluido com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="despesas.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;


    }
}