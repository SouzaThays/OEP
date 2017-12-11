<?php

require_once("model/Doacao.php");  // ----- CARREGA A CLASSE USUARIO  ----- //

function ProcessoDoacao($Processo) {

    switch ($Processo) { // ----- A PARTIR DESTE PONTO TESTA O PROCESSO PASSADO PELA CAMADA DE VISÃO ----- //

        case 'incluir': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO INCLUIR USUARIO ----- //

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $doacao = new Doacao(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $doacao->consultar("select * from doacao"); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
            $linha = $doacao->Linha;
            $rs = $doacao->Result;




            if (isset($_POST['ok']) == 'true') {
               // $doacao->incluirDonativo($_POST['validade'],$_POST['pontuacao']);

                $doacao->incluirDoacao($_POST['data'],$_POST['quantidade'], $_POST['pontuacao'], $_POST['donativo'], $_POST['fkEscola']);
                echo '<script>alert("Cadastrado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="nova_doacao.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;

        case 'consultar': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO CONSULTAR USUARIO ----- //

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $doacao = new Doacao(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $doacao->consultar("select * from donativo"); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
            $linha = $doacao->Linha;
            $rs = $doacao->Result;

            if (isset($_GET['ok']) == "excluir") {
                $doacao->excluir($_GET['idDoacao']);
                echo '<script>alert("Excluido com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="nova_doacao.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;


        case 'editar':

            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $doacao = new Doacao(); // ----- CRIA O OBJETO DE USUARIO ----- //

            $doacao->consultar("select * from doacaoo where idDoacao=" . $_GET['idDoacao']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS NESTE CASO UMA CONSULTA ESPECIFICA PARA O ID DE USUARIO VEJA O WHERE----- //
            $linha = $doacao->Linha;
            $rs = $doacao->Result;

            if (isset($_POST['ok']) == "true") {
                $doacao->alterar($_POST['data'], $_POST['pontuacao'], $_GET['idDoacao']);
                echo '<script>alert("Alterado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="lista_doacao.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;
    }
}