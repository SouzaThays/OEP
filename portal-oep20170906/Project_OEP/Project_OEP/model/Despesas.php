<?php
require_once('Conexao.php');
/**
 * Created by PhpStorm.
 * User: thays
 * Date: 08/08/2017
 * Time: 14:02
 */

class Despesas
{
    private $idDespesas;
    private $mnDespesas;
    private $valor;
    private $idProjeto;


    public function incluir($mnDespesas, $valor, $idProjeto) {

        $insert = 'insert into despesas( mnDespesas, valor, idProjeto) values("' . $mnDespesas . '", "' . $valor . '" , "' . $idProjeto . '")';

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

    public function excluir($idDespesas) {

        $delete = 'delete from despesas where idDespesas="' . $idDespesas . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //

    public function alterar($mnDespesas, $valor, $idDespesas) {

        $update = 'update despesas set mnDespesas="' . $mnDespesas .'", valor="' . $valor  . '"  where idDespesas="' . $idDespesas . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }
}