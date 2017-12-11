<?php include('menu.php'); ?>
<?php
     require_once('controller/ControleDespesas.php'); // ----- CARREGA O CONTROLE ----- //
     ProcessoDespesas('incluir');
?>
<section>
    <aside id="leftsidebar" class="sidebar">
        <?php include('informacao.php'); ?>
        <div class="menu">
            <ul class="list">
                <li class="header">MENU DE NAVEGAÇÃO</li>
                <li>
                    <a href="index.php">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">local_activity</i>
                        <span>Projeto</span>
                    </a>
                    <ul class="ml-menu">
                        <li>

                        <li>
                            <a href="novo_projeto.php">Novo projeto</a>
                        </li>
                        <li>
                            <a href="lista_projeto.php">Lista de Projetos</a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">people</i>
                        <span>Participantes</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                        <li>
                            <a href="lista_participante.php" >Lista de projeto</a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="email.php">
                        <i class="material-icons">email</i>
                        <span  type="Submit" class="semEstilo" > E-mail </span>

                    </a>
                </li>
                <li>
                    <a href="certificado.php">
                        <i class="material-icons">card_membership</i>
                        <span>Certificado</span>
                    </a>
                </li>
                <li >
                    <a href="cracha.php">
                        <i class="material-icons">assignment_ind</i>
                        <span>Crachá </span>
                    </a>
                </li>
                <li>
                    <a href="relatorio.php">
                        <i class="material-icons">trending_up</i>
                        <span>Relatório</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">star</i>
                        <span>Doação</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                        <li>
                            <a href="lista_doacao.php" > Lista de doação </a>
                        </li>
                        <li>
                            <a href="nova_doacao.php">Nova doação</a>
                        </li>
                        <li>
                            <a href="ranking.php" > Ranking</a>
                        </li>
                        <li>
                            <a href="beneficiario.php">Benefiaciario</a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="acesso.php">
                        <i class="material-icons">person</i>
                        <span> Acesso</span>
                    </a>
                </li>
                <li>
                    <a href="depoimento.php">
                        <i class="material-icons">comment</i>
                        <span>Depoimento</span>
                    </a>
                </li>
                <li>
                    <a href="sorteio.php">
                        <i class="material-icons">card_giftcard</i>
                        <span> Sorteio</span>
                    </a>
                </li>
                <li>
                    <a href="enquete.php">
                        <i class="material-icons">toc</i>
                        <span>Enquete</span>
                    </a>
                </li>
                <li>
                    <a href="faq.php">
                        <i class="material-icons">help</i>
                        <span>FAQ</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</section>
<?php
require_once('controller/ControleDespesas.php'); // ----- CARREGA O CONTROLE ----- //
ProcessoDespesas('consultarProj');
?>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <form class=" form_advanced_validation" action="" id="form" name="form" method="post">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php if ($row = mysqli_fetch_array($rs)) { ?>
                                <input type="hidden" name="idProjeto" id="idProjeto" value="<?php echo $row['idProjeto']; ?>" />
                               
                                <?php echo $row['nome']; ?>
                                <?php } ?>
                            </h2>
                        </div>
                         <?php
                        require_once('controller/ControleDespesas.php'); // ----- CARREGA O CONTROLE ----- //
                        ProcessoDespesas('consultar');
                        ?>
                        <script src="js/Validacaoform.js"></script>
                       
                        <div class="body">                     
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Descrição</th>
                                            <th>Valor</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['mnDespesas']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['valor']; ?>
                                            </td>
                                            <td>
                                                <a href="editar_despesas.php?idDespesas=<?php echo $row['idDespesas']; ?>">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="despesas.php?ok=excluir&idDespesas=<?php echo $row['idDespesas']; ?>">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-8">
                                        <b>Descrição</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control " id="mnDespesas" name="mnDespesas" placeholder="Despesas" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Valor:</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control money-dollar" id="valor" name="valor" placeholder="Ex: 999,99 $" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="button-demo">
                                        <input type="submit" name="button" id="button" value="Cadastrar" class="btn btn-danger waves-effect" onclick="validaData()" />
                                        <input type="hidden" name="ok" id="ok" />
                                    </div>
                                </div>
                                <?php
                                require_once('controller/ControleDespesas.php'); // ----- CARREGA O CONTROLE ----- //
                                ProcessoDespesas('consultar');
                                ?>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                       
                                            <?php $soma +=  $row['valor']; ?>
                                        
                                        <?php } ?>
                                        <h2>
                                           Total:  <?php echo $soma ?>
                                        </h2>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
