<?php

require_once("model/Escola.php");

function Escola($Processo)
{

    switch ($Processo) {

        case 'consultar':

            global $linha;
            global $rs;

            $escola = new Escola();

            $escola->consultar("select * from escola");
            $linha = $escola->Linha;
            $rs = $escola->Result;


            break;
    }
}