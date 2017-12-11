

<?php include('menu.php'); ?>

<section>
    <aside id="leftsidebar" class="sidebar">
        <?php include('informacao.php'); ?>
        

    </aside>

</section>



<script language="JavaScript">
function contaCheckbox(){
  var inputs, x, selecionados=0;
        inputs = document.getElementsByTagName('input');
        cont = 1;
        cont1 = 2;
        for (x = 0; x < 90; x++){
         

                var cont = cont + 2;
            var cont1 = cont1 + 2;       
                    if (document.getElementById(cont).checked) {
                       // document.getElementById(cont1).disabled = false;
                        document.getElementById(cont1).disabled = true;
                      
                    }
                    else {
                       // document.getElementById(cont1).disabled = true;
                         document.getElementById(cont1).disabled = false;
                      
                    } 
    }

  return selecionados;
}
</script>



 <?php
 require_once('controller/ControleDoacao.php'); // ----- CARREGA O CONTROLE ----- //
 ProcessoDoacao('incluir'); // ----- PASSA O PROCESSO AO CONTROLE ----- //
 ?>


<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 class="card-inside-title">Novo Doação</h2>
					</div>
					<div class="body">
						<form id="form_validation" method="POST">
							<div class="demo-masked-input">
								<div class="row clearfix">
									<div class="col-md-6">
                                         <?php
                                         require_once('controller/ControleEscola.php'); 
                                         Escola('consultar'); 
										 ?>
										
											<b>Escola</b>
										
										<select class="form-control show-tick" id="fkEscola" name="fkEscola"><?php while ($row = mysqli_fetch_array($rs)) { ?>
											<option value="<?php echo $row['idEscola']; ?>"><?php echo $row['nome']; ?> </option><?php } ?>
										</select>
									</div>
									
									<div class="col-md-6">
										<b>Beneficiário</b>
										<div>

											<div class="form-line">
												<input type="text" class="form-control " placeholder="Nome completo" name="beneficiario">
											</div>
										</div>
									</div>
								
								</div>

                                <?php
                                require_once('controller/ControleDoacao.php'); // ----- CARREGA O CONTROLE ----- //
                                ProcessoDoacao('consultar'); // ----- PASSA O PROCESSO AO CONTROLE ----- //
								?>
								<div class="body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-hover dataTable js-exportable">
											<thead>
												<tr>
													<th>Ação</th>
													<th>Donativo</th>
													<th>Pontuação</th>
													<th>Qantidade</th>
													
												</tr>
											</thead>

                                            <?php  $cont4 = 2 ?>
											<tbody>
												<?php while ($row = mysqli_fetch_array($rs)) { ?>


												<?php $cont2 = $cont2+3; ?>
												<?php  $cont1 = $cont1+3; ?>
												
												<?php  $cont4 = $cont4+2; ?>
												<tr>
													<td>
														<input type="checkbox" id="<?php echo $cont2; ?>" class="filled-in chk-col-red" name="donativo[]" value="<?php echo $row['idDonativo']; ?>" onclick="contaCheckbox()" />
														<label for="<?php echo $cont1; ?>" style="display:inline" ></label>	
                                                    </td>
													<td><?php echo $row['nome']; ?></td>
													<td>
														<input type="hidden" id="<?php echo $cont1; ?>" class="filled-in chk-col-red" name="pontuacao[]" value="<?php echo $row['pontuacao']; ?>" onclick="contaCheckbox()" />
														<?php echo $row['pontuacao']; ?>
                                                    </td>
													<td>
                                                        <input type="text" class="form-control"  id="<?php echo $cont4++; ?>" name="quantidade[]" placeholder="Nome completo"  >
                                                    </td>
													
													
												
												</tr>

												<?php } ?>
											</tbody>
										</table>
										
								
								<div class="button-demo">
									<div>
										<input type="submit" name="button" id="button" value="Cadastrar" class="btn btn-danger waves-effect" onclick="validaData()" />
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