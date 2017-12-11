<?php include('menu.php'); ?>
<section>
    <aside id="leftsidebar" class="sidebar">
        <?php include('informacao.php'); ?>
    </aside>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Despesas
                        </h2>
                    </div>
                    <?php
                    require_once('controller/ControleDespesas.php'); // ----- CARREGA O CONTROLE ----- //
                    ProcessoDespesas('editar');
                    ?>
                    <script src="js/Validacaoform.js"></script>
                    <div class="body">
                        <form class="form-signin" action="" id="form" name="form" method="post">
                            <?php while ($row = mysqli_fetch_array($rs)) { ?>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-8">
                                        <b>Descrição</b>
                                        <div >
                                            <div class="form-line">
                                                <input type="text" class="form-control " id="mnDespesas" name="mnDespesas" value="<?php echo $row['mnDespesas']; ?>" placeholder="Nome completo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Valor:</b>
                                        <div >
                                            <div class="form-line">
                                                <input type="text" class="form-control money-dollar"  id="valor" name="valor" value="<?php echo $row['valor']; ?>" placeholder="Ex: 99,99 $">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-10">
                                        <div class="button-demo">
                                            <input type="button" name="button" id="button" value="Incluir" class="btn btn-danger waves-effect" onclick="validar(document.form);"/>
                                            <input type="hidden" name="ok" id="ok" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
