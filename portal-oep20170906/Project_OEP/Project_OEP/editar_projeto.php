
<?php include('menu.php'); ?>

<?php
require_once('controller/ControleProjeto.php'); 
Projeto('incluir'); 
?>

                    <?php
                    require_once('controller/ControleProjeto.php'); // ----- CARREGA O CONTROLE ----- //
                    Projeto('editar'); // ----- PASSA O PROCESSO AO CONTROLE ----- //
                    ?>

<section>
    <aside id="leftsidebar" class="sidebar">
        <?php include('informacao.php'); ?>4
    </aside>
</section>

<section class="content">
 
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="card-inside-title">Novo Projeto</h2>
                    </div>
                    <script src="view/js/Validacaoform.js">
                    </script>
                    <div class="body">

                        <form class="form_advanced_validation" action="" id="form" name="form" method="post">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-5">
                                        <?php
                                        require_once('controller/ControlePlanejamento.php'); 
                                        Planejamento('consultar'); 
                                        ?>
                                        <p>
                                            <b>Planejamento</b>
                                        </p>
                                        <select class="form-control show-tick" id="fkPlanejamento" name="fkPlanejamento">
                                            <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                                <option value="<?php echo $row['idPlanejamento']; ?>"><?php echo $row['descricao']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-5">
                                        <?php
                                        require_once('controller/ControlePrograma.php'); 
                                        Programa('consultar'); 
                                        ?>
                                        <p>
                                            <b>Programa</b>
                                        </p>
                                        <select class="form-control show-tick" id="fkprograma" name="fkprograma">
                                            <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                                <option value="<?php echo $row['idprograma']; ?>"><?php echo $row['atuacao']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-11">
                                        <b>Nome</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Data inicio</b>
                                        <div>
                                            <div class="form-line">
                                                <input  type="text" class=" date form-control " id="dataInicio" name="dataInicio" placeholder="01/01/2017"  required>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="col-md-2">
                                        <b>Data fim</b>
                                        <div >
                                            <div class="form-line">
                                                <input type="text" class="form-control date" id="dataFim" name="dataFim" placeholder="01/01/2017" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Número de vagas</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="number" class="form-control " id="numVagas" name="numVagas" placeholder="Número" min="1"  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="demo-checkbox">
                                            <input type="checkbox" id="certifPC" name="certifPC" value="Sim" class="filled-in chk-col-red"  />
                                            <label for="certifPC">Validar como projeto comunitario</label>
                                            <input type="checkbox" id="certifHC" name="certifHC" class="filled-in chk-col-red" value="Sim" />
                                            <label for="certifHC">Validar como horas complementares</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <b>Descrição</b>
                                        <div>
                                            <div class="form-line">
                                                <textarea rows="5" class="form-control auto-growth" placeholder="..." id="informacao" name="informacao" title="Por favor preencha o campo nome" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Assessoria</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control " id="assessoria" name="assessoria" placeholder="Assessoria" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Responsável</b>
                                        <div >

                                            <div class="form-line">
                                                <input type="text" class="form-control " id="responsavel" name="responsavel" placeholder="Nome Responsável" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Local</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control "  id="local" name="local" placeholder="Local" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Taxa da inscrição</b>
                                        <div >
                                            <div class="form-line">
                                                <input type="number" class="form-control "  id="valorTaxa" name="valorTaxa" placeholder="Taxa" min="1" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="dataAtual" name="dataAtual" value="<?php echo date("d/m/Y") ?>">
                                <div class="button-demo">
                                    <div>
                                        <input type="button" name="button" id="button" value="Adicionar Gastos" class="btn btn-danger waves-effect" />
                                        <input type="hidden" name="ok" id="ok" />
                                        <input type="submit" name="button" id="button" value="Cadastrar" class="btn btn-danger waves-effect" onclick="validaData()"/>
                                        <input type="hidden" name="ok" id="ok" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




