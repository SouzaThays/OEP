<?php

require_once('Conexao.php');

class Projeto {


    private $idProjeto;
    Private $nome;
    Private $dataInicio;
    Private $dataFim;
    Private $informacao;
    Private $assessoria;
    Private $responsavel;
    Private $numVagas;
    Private $valorTaxa;
    Private $local;
    Private $fkprograma;
    Private $fkPlanejamento;

    public function incluir($nome, $dataInicio, $dataFim, $informacao, $assessoria,
                            $responsavel, $numVagas, $valorTaxa, $certifHC, $certifPC, $local, $fkprograma, $fkPlanejamento) {

        $insert = 'insert into projeto(nome, dataInicio, dataFim, informacao, assessoria, responsavel, numVagas, valorTaxa,
    certifPC, certifHC, local, fkprograma, fkPlanejamento ) values("' . $nome . '", "' . $dataInicio . '", "'. $dataFim . '",
    "' . $informacao . '","' . $assessoria . '", "' . $responsavel . '", "'   . $numVagas . '", "'. $valorTaxa . '", "' . $certifPC . '",
    "' . $certifHC . '", "'  . $local . '", "' . $fkprograma . '", "' . $fkPlanejamento . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }

    // ----- FUNÇÃO DE CONSULTA DE DADOS ----- //

    public function consultar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysqli_affected_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

    // ----- FUNÇÃO DE EXCLUSÃO DE DADOS ----- //

    public function excluir($idProjeto) {

        $delete = 'delete from projeto where idProjeto="' . $idProjeto . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //

    public function alterar($nome, $dataInicio, $dataFim, $informacao, $assessoria, $responsavel,
        $numVagas, $valorTaxa, $local, $idProjeto,$certifPC, $certifHC) {

        $update = 'update projeto set nome="' . $nome . '", dataInicio="' .$dataInicio . '", dataFim="' . $dataFim . '", informacao="' . $informacao . '", assessoria="' . $assessoria . '", responsavel="' . $responsavel . '", numVagas="' . $numVagas . '", valorTaxa="' . $valorTaxa . '", local ="' . $local .'", certifPC ="' . $certifPC .'", certifHC ="' . $certifHC .'" where idProjeto="' . $idProjeto . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

}
