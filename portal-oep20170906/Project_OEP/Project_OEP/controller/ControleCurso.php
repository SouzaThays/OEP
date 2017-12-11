<?php

require_once("model/Curso.php");


function Curso($Processo)
{

    switch ($Processo) {

        case 'consultar':

            global $linha;
            global $rs;

            $curso = new Curso();

            $curso->consultar("select * from curso");
            $linha = $curso->Linha;
            $rs = $curso->Result;

            break;
    }
}