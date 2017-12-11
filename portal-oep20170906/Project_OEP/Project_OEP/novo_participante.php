<?php include('menu.php'); ?>

<?php
require_once('controller/ControlePessoa.php'); 
ProcessoPessoa('incluir');
?>

<section>
    <aside id="leftsidebar" class="sidebar">
        <?php include('informacao_participante.php'); ?>
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

                        <script>


                            function tipoPessoaEstudante() {
                                var estudante = document.getElementById("opt-estudante").checked;
                                if (estudante) {
                                    document.getElementById("estudante").style.display = "block";
                                    document.getElementById("inf").style.display = "block";
                                    document.getElementById("colaborador").style.display = "none";
                                    document.getElementById("entidadeExterna").style.display = "none";


                                }
                            }

                            function tipoPessoaColaorador() {
                                var estudante = document.getElementById("opt-estudante").checked;
                                if (colaborador) {
                                    document.getElementById("estudante").style.display = "none";
                                    document.getElementById("colaborador").style.display = "block";
                                    document.getElementById("entidadeExterna").style.display = "none";
                                    document.getElementById("inf").style.display = "none";
                                }

                            }

                            function tipoPessoaEntidadeExterna() {
                                var estudante = document.getElementById("opt-estudante").checked;
                                if (entidadeExterna) {
                                    document.getElementById("estudante").style.display = "none";
                                    document.getElementById("colaborador").style.display = "none";
                                    document.getElementById("entidadeExterna").style.display = "block";
                                    document.getElementById("inf").style.display = "none";
                                }

                            }
                        </script>



                        <form class="" action="" id="form" name="form" method="post">
                            <div class="demo-masked-input">
                                <div class="row clearfix">

									<div class="col-md-10">
										<b>Tipo de participante</b>
										<div class="demo-radio-button">
											<input name="TipoPessoa" type="radio" id="opt-estudante" value="masculino" class="radio-col-red" onclick="tipoPessoaEstudante();" checked />
											<label for="opt-estudante">Estudante</label>
											<input name="TipoPessoa" type="radio" id="opt-colaborador" value="feminino" class="radio-col-red" onclick="tipoPessoaColaorador();" />
											<label for="opt-colaborador">Colaborador</label>
											<input name="TipoPessoa" type="radio" id="opt-entidadeExterna" value="feminino" class="radio-col-red" onclick="tipoPessoaEntidadeExterna();" />
											<label for="opt-entidadeExterna">Entidade Externa</label>
										</div>
									</div>
                                    <!------------------------------------------------------------------------------------->
									<div id="estudante" style="display: block;">
										<div class="col-md-10" id="estudante">
											<b>Matricula</b>
											<div>
												<div class="form-line">
													<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Nome completo">
												</div>
											</div>
										</div>
									</div>
									<div id="colaborador" style="display: none;">
										<div class="col-md-6">
											<b>Matricula</b>
											<div>
												<div class="form-line">
													<input type="text" class="form-control" id="matriculaC" name="matriculaC" placeholder="Nome completo">
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<b>Cargo</b>
											<div>
												<div class="form-line">
													<input type="text" class="form-control" id="cargo" name="cargo" placeholder="Nome completo">
												</div>
											</div>
										</div>
									</div>
									<div id="entidadeExterna" style="display: none;">
										<div class="col-md-12">
											<b>Instituição</b>
											<div>
												<div class="form-line">
													<input type="text" class="form-control" id="instituicao" name="instituicao" placeholder="Nome completo">
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-10">
                                        <b>Nome</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Data nascimento</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class=" date form-control " id="dataNascimento" name="dataNascimento" value="" placeholder="Ex: 30/07/2016" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <b>CPF</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="text" class="form-control cpf " id="cpf" name="cpf" placeholder="Ex: 00-000-000-0" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>RG</b>
                                        <div>

                                            <div class="form-line">
                                                <input type="text" class="form-control rg " id="rg" name="rg" placeholder="Ex: 000.000.000-04" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Orgão expedidor</b>
                                        <select class="form-control show-tick" id="orgaoExpedidor" name="orgaoExpedidor" value="" required>
                                            <option>SSP</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Telefone Fixo</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="tel" class="form-control phone-number" placeholder="(041)3000-0000" id="telefoneFixo" name="telefoneFixo" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Celular</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="tel" class="form-control mobile-phone-number" placeholder=(041)99000-00-00" id="celular value="" name="celular" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Email</b>
                                        <div>
                                            <div class="form-line">
                                                <input type="email" class="form-control " placeholder="email" id="email" name="email" value="" required>
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
                                            <input name="alergia" type="radio" id="sim" value="sim" class="radio-col-red" checked />
                                            <label for="sim">Sim</label>
                                            <input name="alergia" type="radio" id="nao" value="não" class="radio-col-red" checked />
                                            <label for="nao">Não</label>
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
                                                <input type="text" class="form-control " placeholder="Rua, numero, complemento, cidade, estado" id="endereco" name="endereco" value="">
                                            </div>
                                        </div>
                                    </div>

									<div id="inf" style="display: block;">


                                        <?php
                                        require_once('controller/ControleEscola.php'); 
                                        Escola('consultar'); 
                                        ?>

										<div class="col-md-4">
											<b>Escola</b>

                                            <select class="form-control show-tick" id="fkEscola" name="fkEscola">
                                                <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                                    <option value="<?php echo $row['idEscola']; ?>"><?php echo $row['nome']; ?> </option>
                                                <?php } ?>
                                            </select>

										</div>

                                        <?php
                                        require_once('controller/ControleCurso.php'); 
                                        Curso('consultar'); 
                                        ?>

										<div class="col-md-4">
											<b>Curso</b>
                                            <select class="form-control show-tick" id="fkCurso" name="fkCurso">
                                                <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                                    <option value="<?php echo $row['idCurso']; ?>"><?php echo $row['nome']; ?> </option>
                                                <?php } ?>
                                            </select>
										</div>
										<div class="col-md-2">
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
										<div class="col-md-2">
											<b>Turno</b>
											<select class="form-control show-tick" id="turno" name="turno">
												<option>Manhã</option>
												<option>Tarde</option>
												<option>Noite</option>
												<option>Integral</option>
											</select>
										</div>
									</div>
                                    
                                    
                                </div>
                                <div class="button-demo">
                                    <div>
                                        <input type="submit" name="button" id="button" value="Atualizar" class="btn btn-danger waves-effect" onclick="validaData()" />
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