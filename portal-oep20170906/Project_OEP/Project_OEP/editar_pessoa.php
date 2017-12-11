<?php include('menu.php'); ?>

<?php
    require_once('controller/ControlePessoa.php'); // ----- CARREGA O CONTROLE ----- //
    ProcessoPessoa('editar'); // ----- PASSA O PROCESSO AO CONTROLE ----- //
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
                        <h2 class="card-inside-title">Novo Projeto</h2>
                    </div>
                    <script src="view/js/Validacaoform.js">
                    </script>
                    <div class="body">
                        <form class="" action="" id="form" name="form" method="post"><?php while ($row = mysqli_fetch_array($rs)) { ?>
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-10">
                                        <b>Nome</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" value="<?php echo $row['nome']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Data nascimento</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class=" date form-control " id="dataNascimento" name="dataNascimento" value="<?php echo $row['dataNascimento']; ?>" placeholder="Ex: 30/07/2016" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <b>CPF</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control cpf " id="cpf" name="cpf" placeholder="Ex: 00-000-000-0" value="<?php echo $row['cpf']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>RG</b>
                                        <div>

                                            <div class="form-line">
                                                <input type="text" class="form-control rg " id="rg" name="rg" placeholder="Ex: 000.000.000-04" value="<?php echo $row['rg']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Orgão expedidor</b>
                                        <select class="form-control show-tick" id="orgaoExpedidor" name="orgaoExpedidor" value="<?php echo $row['orgaoExpedidor']; ?>" required>
                                            <option>SSP</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Telefone Fixo</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="tel" class="form-control phone-number" placeholder="(041)3000-0000" id="telefoneFixo" name="telefoneFixo" value="<?php echo $row['telefoneFixo']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Celular</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="tel" class="form-control mobile-phone-number" placeholder=(041)99000-00-00" id="telefoneCelular value="<?php echo $row['telefoneCelular']; ?>"" name="telefoneCelular" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Email</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="email" class="form-control " placeholder="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Sexo</b>
                                        <div class="demo-radio-button">
                                            <input name="sexo" type="radio" id="Masculino" value="masculino" class="radio-col-red" checked />
                                            <label for="Masculino">Masculino</label>
                                            <input name="sexo" type="radio" id="feminino" value="feminino" class="radio-col-red" checked />
                                            <label for="feminino">Feminino</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Plano de Saúde</b>
                                        <div class="demo-radio-button">
                                            <input name="planoSaude" type="radio" id="sim" value="sim" class="radio-col-red" checked />
                                            <label for="sim">Sim</label>
                                            <input name="planoSaude" type="radio" id="nao" value="não" class="radio-col-red" checked />
                                            <label for="nao">Não</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Alergia</b>
                                        <div class="demo-radio-button">
                                            <input name="alergia" type="radio" id="simAlergia" value="sim" class="radio-col-red" checked />
                                            <label for="simAlergia">Sim</label>
                                            <input name="alergia" type="radio" id="naoAlergia" value="não" class="radio-col-red" checked />
                                            <label for="naoAlergia">Não</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Tipo sanguineo</b>
                                        <select class="form-control show-tick" id="tipoSanguineo" name="tipoSanguineo">
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>O+</option>
                                            <option>O-</option>

                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Endereço</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control " placeholder="Rua, numero, complemento, cidade, estado" id="endereco" name="endereco" value="<?php echo $row['endereco']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Escola</b>
                                        <select class="form-control show-tick" id="id_escola" name="nomefkprograma"><?php while ($row = mysqli_fetch_array($rs)) { ?>
                                            <option><?php echo $row['nome']; ?></option><?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Curso</b>
                                        <select class="form-control show-tick" id="curso" name="curso"><?php while ($row = mysqli_fetch_array($rs)) { ?>
                                            <option value="ok=excluir&id_escola=<?php echo $row['id_escola']; ?>"><?php echo $row['nome']; ?></option><?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Periodo</b>
                                        <select class="form-control show-tick" id="periodo" name="periodo">
                                            <option>1º</option>
                                            <option>2º</option>
                                            <option>3º</option>
                                            <option>4º</option>
                                            <option>5º</option>
                                            <option>6º</option>
                                            <option>7º</option>
                                            <option>8º</option>
                                            <option>9º</option>
                                            <option>10º</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Turno</b>
                                        <select class="form-control show-tick" id="turno" name="turno">
                                            <option>Manhã</option>
                                            <option>Tarde</option>
                                            <option>Noite</option>
                                            <option>Integral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="button-demo">
                                    <div>
                                        <input type="submit" name="button" id="button" value="Atualizar" class="btn btn-danger waves-effect" onclick="validaData()" />
                                        <input type="hidden" name="ok" id="ok" />
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
