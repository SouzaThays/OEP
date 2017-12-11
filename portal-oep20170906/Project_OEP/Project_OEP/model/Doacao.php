<?php
require_once('Conexao.php');


class Doacao
{
    private $idDoacao;
    private $data;
    private $pontuacao;
    private $fkDonativo;
    private $fkEscola;





    public function incluirDoacao($data, $quantidade, $pontuacao, $donativo, $fkEscola) {

        $data = date("Y-m-d");

        $opcoesD = $donativo;
        $opcoesQ = $quantidade;
        $opcoesP = $pontuacao;



        $opcoes_text = implode(", ", $opcoesD);
        $opcoes_text1 = implode(", ", $opcoesQ);
        $opcoes_text2 = implode(", ", $opcoesP);

        $array = explode(",", $opcoes_text);
        $array1 = explode(",", $opcoes_text1);
        $array2 = explode(",", $opcoes_text2);


        $cont = 0;



        foreach ($donativo as $fkDonativo) {
            
            $pont = $array2[$cont];
            $qtd = $array1[$cont];
            $cont =  $cont + 1;

            while(strcasecmp($qtd,"") == 0 || strcasecmp($qtd," ") == 0 ){

                $qtd = $array1[$cont];
                $pont = $array2[$cont];

                $cont =  $cont + 1;
            }




            $totalPontuacao = $pont * $qtd;



       // foreach($donativo as $fkDonativo){
        //    $pont = $pontuacao++;


            $insert = 'insert into doacao(data, quantidade, pontuacao, fkDonativo, fkEscola) values("' . $data . '", "' . $qtd . '" , "' . $totalPontuacao . '" , "' . $fkDonativo . '", "' . $fkEscola . '")';

                $Acesso = new Acesso();

                $Acesso->Conexao();

                $Acesso->Query($insert);

        }
    }

    public function incluirDonativo($validade, $pontuacao) {

        $insert = 'insert into donativo(validade, pontuacao) values("' . $validade . '", "' . $pontuacao . '")';

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

    public function excluir($idDoacao) {

        $delete = 'delete from doacaoo where idDoacao="' . $idDoacao . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //

    public function alterar($data, $pontuacao, $idDoacao) {

        $update = 'update doacao set data="' . $data .'", pontuacao="' . $pontuacao  . '"  where idDoacao="' . $idDoacao . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }
}