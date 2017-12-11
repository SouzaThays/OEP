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
                            Lista de Pessoas
                        </h2>
                    </div>
                    <?php
                    require_once('controller/ControlePessoa.php'); 
                    ProcessoPessoa('consultar'); 
                    ?>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Data nascimento</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    <th>Orgão expedidor</th>
                                    <th>Telefone Fixo</th>
                                    <th>Celular</th>
                                    <th>E-mail</th>
                                    <th>Sexo</th>
                                    <th>Plano de saúde</th>
                                    <th>Alergia</th>
                                    <th>Tipo sanguineo</th>
                                    <th>Endereco</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                    <tr>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['dataNascimento']; ?></td>
                                        <td><?php echo $row['cpf']; ?></td>
                                        <td><?php echo $row['rg']; ?></td>
                                        <td><?php echo $row['orgaoExpedidor']; ?></td>
                                        <td><?php echo $row['telefoneFixo']; ?></td>
                                        <td><?php echo $row['telefoneCelular']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['sexo']; ?></td>
                                        <td><?php echo $row['planoSaude']; ?></td>
                                        <td><?php echo $row['alergia']; ?>111</td>
                                        <td><?php echo $row['tipoSanguineo']; ?></td>
                                        <td><?php echo $row['endereco']; ?></td>
                                        <td>
                                            <a href="editar_pessoa.php?idUsuario=<?php echo $row['idUsuario']; ?>">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="lista_participante.php?ok=excluir&idUsuario=<?php echo $row['idUsuario']; ?>">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
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