<?php

require_once("model/Programa.php");  


function Programa($Processo)
{

    switch ($Processo) { 

        case 'consultar': 

            global $linha;
            global $rs; 

            $programa = new Programa(); 

            $programa->consultar("select * from programa"); 
            $linha = $programa->Linha;
            $rs = $programa->Result;

            break;
    }
}