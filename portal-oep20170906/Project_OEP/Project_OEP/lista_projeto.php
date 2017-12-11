

<?php include('menu.php'); ?>
<?php
require_once('controller/ControleProjeto.php'); 
Projeto('consultar'); 
?>
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
                            Lista de Projetos
                        </h2>
                    </div>
                    
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>Data inicio</th>
                                    <th>Data fim</th>
                                    <th>Programa</th>
                                    <th>Status</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                <tr>

                                    <td><?php echo $row['nome']; ?></td>
                                    <td><?php echo $row['dataInicio']; ?></td>
                                    <td><?php echo $row['dataFim']; ?></td>
                                    <td>Solidariedade</td>
                                    <td>Incrição</td>
                                    <th>
                                        <a  href="novo_projeto.php?idProjeto=<?php echo $row['idProjeto']; ?>" title="Editar">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="lista_projeto.php?ok=excluir&idProjeto=<?php echo $row['idProjeto']; ?>" title="Excluir">
                                            <i class="material-icons">delete_forever</i>
                                        </a>
                                        <a href="despesas.php?idProjeto=<?php echo $row['idProjeto']; ?>" title="Despesas">
                                            <i class="material-icons">attach_money</i>
                                        </a>
                                        <a href="lista_projeto.php?ok=excluir&idProjeto=<?php echo $row['idProjeto']; ?>" title="Listar inscritos">
                                            <i class="material-icons">list</i>
                                        </a>
                                    </th>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>


