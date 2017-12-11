<!DOCTYPE html>                       
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
    </head>

    <body class="theme-puc">
        <div class="user-info">
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>

            </div>

        </div>

        <?php
        $estilo = "";

        if ($_GET["pg"] == "inicio")
            $estilo = "class=\"active\"";
        elseif ($_GET["pg"] == "NovoProjetos" || $_GET["pg"] == "listaProjetos" ){
            $estilo2 = "class=\"active\"";
            if ($_GET["pg"] == "NovoProjetos")
            $estilo3 = "class=\"active\"";
            elseif ($_GET["pg"] == "listaProjetos")
            $estilo4 = "class=\"active\"";

        }
        elseif ($_GET["pg"] == "participante")
            $estilo5 = "class=\"active\"";
        elseif ($_GET["pg"] == "participante")
            $estilo6 = "class=\"active\"";
        elseif ($_GET["pg"] == "email")
            $estilo7 = "class=\"active\"";
        elseif ($_GET["pg"] == "certificado")
            $estilo8 = "class=\"active\"";
        elseif ($_GET["pg"] == "cracha")
            $estilo9 = "class=\"active\"";
        elseif ($_GET["pg"] == "relatorio")
            $estilo10 = "class=\"active\"";


        elseif ($_GET["pg"] == "listaDoacao" || $_GET["pg"] == "novoDacao" || $_GET["pg"] == "ranking" || $_GET["pg"] == "beneficiario" ){
            $estilo11 = "class=\"active\"";
            if ($_GET["pg"] == "listaDoacao")
                $estilo12 = "class=\"active\"";
            elseif ($_GET["pg"] == "novoDacao")
                $estilo13 = "class=\"active\"";
            elseif ($_GET["pg"] == "ranking")
                $estilo14 = "class=\"active\"";
            elseif ($_GET["pg"] == "beneficiario")
                $estilo15 = "class=\"active\"";
        }

            elseif ($_GET["pg"] == "participante")
                $estilo16 = "class=\"active\"";
            elseif ($_GET["pg"] == "participante")
                $estilo17 = "class=\"active\"";
            elseif ($_GET["pg"] == "email")
                $estilo18 = "class=\"active\"";
            elseif ($_GET["pg"] == "certificado")
                $estilo19 = "class=\"active\"";
            elseif ($_GET["pg"] == "cracha")
                $estilo920 = "class=\"active\"";
        
        ?>

                <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGAÇÃO</li>
                    <li <?php echo $estilo; ?>><a href="index_adm.php?pg=inicio">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li <?php echo $estilo2; ?>>
                        <a href="javascript:void(0); pg=projetos" class="menu-toggle">
                            <i class="material-icons">local_activity</i>
                            <span>Projetos</span>
                        </a>
                        <ul class="ml-menu">


                            <li <?php echo $estilo3; ?>>
                                <a href="novo_projeto.php?pg=NovoProjetos">Novo projeto</a>
                            </li>
                            <li <?php echo $estilo4; ?>>
                                <a href="lista_projeto.php?pg=listaProjetos">Lista de Projetos</a>
                            </li>

                        </ul>

                        <li <?php echo $estilo5; ?>>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Inscritos</span>
                            </a>
                         <!--   <ul class="ml-menu">

                                <li <?php echo $estilo5; ?>>
                                    <a href="lista_participante.php?pg=participante">Lista de projeto</a>
                                </li>

                            </ul>-->
                        </li>
                        <li <?php echo $estilo7; ?>>
                            <a href="email.php ?pg=email">
                                <i class="material-icons">email</i>
                                <span type="Submit" class="semEstilo">E-mail </span>

                            </a>
                        </li>
                        <li <?php echo $estilo8; ?>>
                            <a href="certificado.php?pg=cerificado">
                                <i class="material-icons">card_membership</i>
                                <span>Certificado</span>
                            </a>
                        <li <?php echo $estilo9; ?>>
                            <li>
                                <a href="cracha.php?pg=cracha">
                                    <i class="material-icons">assignment_ind</i>
                                    <span>Crachá </span>
                                </a>
                            </li>
                        <li <?php echo $estilo10; ?>>
                            <a href="relatorio.php?pg=relatorio">
                                <i class="material-icons">trending_up</i>
                                <span>Relatório</span>
                            </a>
                        </li>
                        <li <?php echo $estilo11; ?>>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">star</i>
                                <span>Doação</span>
                            </a>
                            <ul class="ml-menu">
                                <li <?php echo $estilo12; ?>>
                                    <a href="lista_doacao.php? pg=listaDoacao">Lista de doação </a>
                                </li>
                                <li <?php echo $estilo13; ?>>
                                    <a href="nova_doacao.php?pg=novoDacao">Nova doação</a>
                                </li>
                                <li <?php echo $estilo14; ?>>
                                    <a href="ranking.php ?pg=ranking">Ranking</a>
                                </li>
                                <li <?php echo $estilo15; ?>>
                                    <a href="beneficiario.php?pg=beneficiario">Beneficiário</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php echo $estilo16; ?>>
                            <a href="acesso.php?pg=acesso" ">
                                <i class="material-icons">person</i>
                                <span>Acesso</span>
                            </a>
                        </li>
                        <li <?php echo $estilo17; ?>>
                            <a href="depoimento.php?pg=depoimento">
                                <i class="material-icons">comment</i>
                                <span>Depoimento</span>
                            </a>
                        </li>
                        <li <?php echo $estilo18; ?>>
                            <a href="sorteio.php?pg=sorteio" ">
                                <i class="material-icons">card_giftcard</i>
                                <span>Sorteio</span>
                            </a>
                        </li>
                        <li <?php echo $estilo19; ?>>
                            <a href="enquete.php?pg=enquete" ">
                                <i class="material-icons">toc</i>
                                <span>Enquete</span>
                            </a>
                        </li>
                        <li <?php echo $estilo20; ?>>
                            <a href="faq.php?pg=faq">
                                <i class="material-icons">help</i>
                                <span>FAQ</span>
                            </a>
                        </li>
</ul>
            </div>

</body>

</html>